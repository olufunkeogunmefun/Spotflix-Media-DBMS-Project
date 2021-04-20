<html>
<body>

<h1 style="text-align:center">Add Music</h1>
    <div>
     <form action="add_music.php" method="post">
              <label for="name">Music name: </label><br>  
              <input type="text" name="name" placeholder="Music name..."/> <br>  
              <br>
              <label for="artist_name">Artist name: </label><br>  
              <input type="text"  name="artist_name" placeholder="Artist name..."/> <br/>
               <label for="genre">Genre: </label><br>  
              <input type="text"  name="genre" placeholder="Genre..."/> <br/>  
              <label for="No_of_downloads">Number of downloads: </label><br>
              <input type="int" name="No_of_downloads"/>  <br>
              <label for="length">Length: </label><br>
              <input type="int" name="length" />  <br>
              <label>Select Type:</label><br>  
              <input type="radio" name="MyRadio" value="Song"/>Song<br>  
              <input type="radio" name="MyRadio"value="Album"/>Album<br>    
              <input type="submit" value="Add Music"><br>  

      </form>
      <a href="admin_categories.php"><button >Back</button></a>
    </div>

</body>
</html>