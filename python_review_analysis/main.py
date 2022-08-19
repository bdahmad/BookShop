import string
from collections import Counter
from nltk.tokenize import word_tokenize
from nltk.corpus import stopwords
from nltk.sentiment.vader import SentimentIntensityAnalyzer

import mysql.connector
mydb = mysql.connector.connect(
    host = "localhost",
    username = "root",
    password = "",
    database ='bookshop'
)

cursor = mydb.cursor()
cursor.execute("select id, comment from review")
data = cursor.fetchall()
for row in data:
    #text = open('read', encoding="utf-8").read()
    lower_case = row[1].lower()
    clean_text = lower_case.translate(str.maketrans('', '', string.punctuation))
    tokenized_word = word_tokenize(clean_text, "english")

    final_words = []

    for word in tokenized_word:
        if word not in stopwords.words('english'):
            final_words.append(word)

    #print(final_words)
    emotion_list = []
    with open('emotions.txt', 'r') as file:
        for line in file:
            clear_line = line.replace("\n", '').replace(",", '').replace("'", '').strip()
            word,  emotion = clear_line.split(':')
            #

            if word in final_words:
                emotion_list.append(emotion)
    #       print("word : " + word + " @ " + "emotion " + emotion)

    # print(emotion_list)
    w = Counter(emotion_list)


    # print(w)

    def sentiment_analyze(sentiment_text):
        score = SentimentIntensityAnalyzer().polarity_scores(sentiment_text)
        neg = score['neg']
        pos = score['pos']
        u_sql = "UPDATE review SET `semtiment`=%s WHERE `id` = %s"
        if neg > pos:
            #print("Negative Sentiment")

            cursor.execute(u_sql, ('negative', row[0]))

        elif pos > neg:
            #print("Positive Sentiment")
            #u_sql = "UPDATE review SET `sentiment`=%s WHERE `id` = %s"
            cursor.execute(u_sql, ('Positive', row[0]))

        else:
            #print("Neutral vibe")
            #u_sql = "UPDATE review SET `sentiment`=%s WHERE `id` = %s"
            cursor.execute(u_sql, ('Neutral vibe', row[0]))


    sentiment_analyze(clean_text)

mydb.commit()


print("Database updated successfully")
    


