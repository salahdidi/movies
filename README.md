
list of api services : 

1-	As a user, I should be able to create an account with a username and a password
login :  localhost/api/login?email=salah&password=0000
register:  localhost/api/Register?email=salah&password=0000&name=salah

2-	As a user, I should be able to view the list of movies and series on different pages 
   http://localhost/api/getListMovies?limit=10&offset=0
3-	As a user, I should be able to view the list of the top 5 movies/series in a dedicated section on the movies and series pages
  top 5 base on rating(1-10) : http://localhost/api/getListTopMovies?
4-	 As a user, I should be able to view, in the movies and series pages, all the movies/series available in batches of 10 
 http://localhost/api/getListMovies?limit=10&offset=0
5-	As a user, I should be able to add a movie or a series to my favorites list 
http://localhost/api/addMovieToFavoritesList?movie_id=4   ( also send in postman => authorization =>  barear token   the  api_token returned in login ) 
6-	As a user, I should be able to delete a movie or a series from my favorites list
http://localhost/api/removeMovieFromFavoritesList?movie_id=1 ( also send in postman => authorization =>  barear token   the  api_token returned in login )
7-	 As a user, I should be able to view the list of my favorite movies and series
http://localhost/api/getMoviesFavorites?  ( also send in postman => authorization =>  barear token   the  api_token returned in login )
8-	As a user, I should be able to search for movies and series
http://localhost/api/getListMovies?limit=10&offset=0&name=prof
9-	As a user, I should be able to view the details of a movie or series 
http://localhost/api/getListMoviesDetails?movie_id=1
10-	As a user, I should be able to watch the trailer of a movie or series
http://localhost/api/getMoviesTrailer?movie_id=1
