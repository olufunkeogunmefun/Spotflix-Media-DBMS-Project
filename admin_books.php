<html>
<body>

<h1 style="text-align:center">Add Book Type</h1>
    <div>
     <form action="add_books.php" method="post">
              <label for="book_name">Book name: </label><br>  
              <input type="text" name="book_name" placeholder="Book name..."/> <br>  
              <br>
              <label for="author_name">Author name: </label><br>  
              <input type="text"  name="author_name" placeholder="Author name..."/> <br/>
               <label for="genre">Genre: </label><br>  
              <input type="text"  name="genre" placeholder="Genre..."/> <br/>  
               <label for="Date_borrowed">Date borrowed: </label><br>  
              <input type="date" name="Date_borrowed"/> <br>  
              <label for="Date_returned">Date returned: </label><br>  
              <input type="date" name="Date_returned"/> <br>  
              <label for="No_of_copies_rented">No of copies rented: </label><br>
              <input type="int" name="No_of_copies_rented" />  <br>
              <label for="No_of_copies_bought">No of copies bought: </label><br>
              <input type="int" name="No_of_copies_bought" />  <br>
               <label for="num">Chapter length(Audiobook) / Date published(Book) /Chapter page count(Ebook): </label><br>
              <input type="int" name="num" />  <br>
              <br><br>  
              <label>Select Book Type:</label><br>  
              <input type="radio" name="MyRadio" value="Audiobook"/>Audiobook<br>  
              <input type="radio" name="MyRadio" value="Book"/>Book<br>  
              <input type="radio" name="MyRadio" value="Ebook"/>Ebook<br>  
              <input type="submit" value="Add Book Type"><br>   

      </form>
      <a href="admin_categories.php"><button >Back</button></a>
    </div>

</body>
</html>