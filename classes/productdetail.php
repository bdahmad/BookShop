<?php
class productdetail
{
    private $id;
    private $name;
    private $author;
    private $publisher;
    private $price;
    private $description;
    private $category;
    private $image;

    public function productDetails($bid)
    {
        $source = new source();
        if ($source->Query("SELECT * FROM books WHERE id = ?", [$bid])) {
            $query = $source->SingleRow();
            $this->id = $bid;
            $this->name = $query->name;
            $this->author = $query->author;
            $this->publisher = $query->publisher;
            $this->price = $query->price;
            $this->description = $query->description;
            $this->category = $query->category;
            $this->image = $query->image;
        }
    }
    public function productComment($bid): array
    {
        $source = new source();
        $source->Query("SELECT * FROM review where bid = ? ORDER BY date DESC", [$bid]);
        $review = $source->FetchAll();
        return $review;
    }

    public function productRating($bid): float
    {
        $source = new source();
        $source->Query("SELECT SUM(score) as rate FROM review where bid = ?", [$bid]);
        $rate = $source->SingleRow();

        $source->Query("SELECT * FROM review where bid = ?", [$bid]);
        $source->FetchAll();
        $row = $source->CountRows();
        if ($row > 0) {
            return floatval($rate->rate / $row);
        } else {
            return 0;
        }
    }

    public function relatedProduct($category): int
    {
        $source = new source();

        $query = $source->Query("SELECT max(id) as id FROM books where category = ?", [$category]);
        $query = $source->SingleRow();
        $maxId = $query->id;

        $query = $source->Query("SELECT min(id) as id FROM books where category = ?", [$category]);
        $query = $source->SingleRow();
        $minId = $query->id;


        $randomValue = rand($minId, $maxId);
        return $randomValue;
        // if($query = $source->Query("SELECT * FROM books where id = ?",[$randomValue])){
        //     return $query = $source->SingleRow();

        // }
    }

    public function bestSell()
    {
        $source = new source();
        $allpid = [];
        $pidqty = [];
        $query = $source->Query("SELECT * FROM `order`");
        $details = $source->FetchAll();
        $numrow = $source->CountRows();
        $i = 1;
        if ($numrow > 0) {
            foreach ($details as $row) :
                $query = $source->Query("SELECT bid,uid,date,bname,sum(qty) as qtyy,category  FROM `order` where bid = ?", [$row->bid]);
                $db = $source->SingleRow();
                $check = $row->bid;
                if (!in_array($check, $allpid)) {
                    $pidqty[] = array($row->bid, $db->qtyy);
                }
                $allpid[] = $check;
            endforeach;
        }

        function build_sorter($key)
        {
            return function ($a, $b) use ($key) {
                return strnatcmp($a[$key], $b[$key]);
            };
        }
        usort($pidqty, build_sorter('1'));

        foreach (array_reverse($pidqty) as $item) :
            $query = $source->Query("SELECT * from `order` where bid = ? ", [$item[0]]);
            $db = $source->SingleRow();
            echo "
                                    <div class='col-md-4'>
                                    <div class='product-item'>
                                        <div class='product-title' style='height:100px;'>
                                            <a href='product-detail.php?bid=" . $db->bid . "'>$db->bname</a>
                                            <div class='ratting'>
                                            <span class='rateyo m-auto' data-rateyo-rating='" . $this->productRating($row->bid) . "' data-rateyo-read-only='true'></span>
                                            
    
                                            </div>
                                        </div>
                                        <div class='product-image' >
                                            <a href='product-detail.html'>
                                                <img src='assets/bookimg/" . $db->image . "' style='height:400px;width:400px;' alt='Product Image'>
                                            </a>
                                            <div class='product-action'>
                                                <a href='product-list.php?bookid=" . $db->bid . "'><i class='fa fa-cart-plus'></i></a>
                                            </div>
                                        </div>
                                        <div class='product-price'>
                                            <h3 class='text-white'>" . $db->price . "</h3>
                                            <a class='btn' href='checkout.php?buyNow=" . $db->bid . "'><i class='fa fa-shopping-cart'></i>Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                    ";
        endforeach;
    }
    




    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Get the value of publisher
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
