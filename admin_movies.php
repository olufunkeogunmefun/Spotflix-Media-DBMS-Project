<html>
<body>

<h1 style="text-align:center">Add Movie</h1>
    <div>
     <form action="add_movies.php" method="post">
              <label for="movie_name">Movie name: </label><br>  
              <input type="text" name="movie_name" placeholder="Movie name..."/> <br>  
              <br>
              <label for="director_name">Director name: </label><br>  
              <input type="text"  name="director_name" placeholder="Director name..."/> <br/>  
               <label for="genre">Genre: </label><br>  
              <input type="text"  name="genre" placeholder="Genre..."/> <br/>  
              <label for="rating">Rating: </label><br>
              <input type="int" name="rating"  placeholder="Rating..."/>  <br>
              <label for="No_of_copies_rented">No of copies rented: </label><br>
              <input type="int" name="No_of_copies_rented" />  <br>
              <label for="Date_borrowed">Date borrowed: </label><br>  
              <input type="date" name="Date_borrowed"/> <br>  
              <label for="Date_returned">Date returned: </label><br>  
              <input type="date" name="Date_returned"/> <br>  
              <br><br>  
              <input type="submit" value="Add Movie"><br>   

      </form>
      <a href="admin_categories.php"><button >Back</button></a>
    </div>

</body>
</html>