#!C:/Users/ahmad/AppData/Local/Programs/Python/Python39/python.exe
print("Content-Type: text/html")
print()

#import cur as cur
from flask import Flask, redirect, url_for, render_template,request
import mysql.connector
import string
from collections import Counter
from nltk.tokenize import word_tokenize, sent_tokenize
from nltk.corpus import stopwords
from nltk.sentiment.vader import SentimentIntensityAnalyzer
app = Flask(__name__,template_folder='template')

con = mysql.connector.connect(user='root', password='', host='localhost', database='crud_db')
cur = con.cursor()
# sentiment analysis
cursor = con.cursor()
cursor.execute("select product_id, product_name from product")
data = cursor.fetchall()
for row in data:
    # text = open('read', encoding="utf-8").read()
    lower_case = row[1].lower()
    clean_text = lower_case.translate(str.maketrans('', '', string.punctuation))
    tokenized_word = word_tokenize(clean_text, "english")

    final_words = []

    for word in tokenized_word:
        if word not in stopwords.words('english'):
            final_words.append(word)

    # print(final_words)
    emotion_list = []
    with open('emotions.txt', 'r') as file:
        for line in file:
            clear_line = line.replace("\n", '').replace(",", '').replace("'", '').strip()
            word, emotion = clear_line.split(':')
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
        if neg > pos:
           # print("Negative Sentiment")
            u_sql = "UPDATE product SET `sentiment`=%s WHERE `product_id` = %s"
            cursor.execute(u_sql, ('negative', row[0]))

        elif pos > neg:
            #print("Positive Sentiment")
            u_sql = "UPDATE product SET `sentiment`=%s WHERE `product_id` = %s"
            cursor.execute(u_sql, ('Positive', row[0]))

        else:
            #print("Neutral vibe")
            u_sql = "UPDATE product SET `sentiment`=%s WHERE `product_id` = %s"
            cursor.execute(u_sql, ('Neutral vibe', row[0]))



    sentiment_analyze(clean_text)

con.commit()





# display data in html table
cur.execute("SELECT  * FROM `product`")
data = cur.fetchall()

con.commit()
cur.close()
con.close()

@app.route("/",methods=['POST','GET'])
def review():

	return render_template('review.html', dta=data)


@app.route('/result',methods=['POST','GET'])

def result():
	if request.method == 'POST':


		
		result=request.form
		return render_template('test.html',result=result)




if __name__ == '__main__':
	app.run(debug=True)
