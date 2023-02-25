
 how to deploy the application

1- using sail / docker 
    
    # docker-compose up -d
    # alias sail="./vendor/bin/sail"
    # sail up -d   //to run your docker 
    # sail composer update 
    # sail artisan migrate  //to create database tables (mysql)
    # sail artisan db:seed  // to generate 100 random movies to database
    # sail artisan key:generate
    # sail artisan serve 
  
2- using composer

  # php 8.1 required 
  # composer required 
  # mysql (5.7 or 8)  Required
 
  # cd movies/
  # add database  name , user and password to .env file
  # composer update 
  # php artisan migrate
  # artisan db:seed
  # php artisan key:generate
  # php artisan serve



list of api services : 
important information : 
  when using docker / sail  :  link for api should be the one indicated in your docker for me was localhost:80 and not the normal one localgost:8000
response format  : 
{
    "data": [],
    "succes" : false | true,
    "message" : "server message depnde on  status "
 }
1-	As a user, I should be able to create an account with a username and a password
        register:  localhost/api/Register?email=salah&password=0000&name=salah

        login :  localhost/api/login?email=salah&password=0000
        response : {
                        "data": {
                            "api_token": "4|C2xIeLYSDVzAuL3bKf3yeZbG2MLDADUGaCw9cC59"
                        },
                        "success": true,
                        "message": "ok"
                    } 


2-	As a user, I should be able to view the list of movies and series on different pages 
   http://localhost/api/getListMovies?limit=10&offset=0
   response :  "data": [
                        {
                            "movie_id": 1,
                            "title": "Dr.",
                            "image_path": "https://via.placeholder.com/640x480.png/0022aa?text=deserunt",
                            "rating": 4,
                            "name": "Ms."
                        }, ... 
                        ]
3-	As a user, I should be able to view the list of the top 5 movies/series in a dedicated section on the movies and series pages
  top 5 base on rating(1-10) : 
  http://localhost/api/getListTopMovies?
  response :   "data": [
                            {
                                "movie_id": 31,
                                "name": "Mrs.",
                                "title": "Prof.",
                                "descreption": "76015",
                                "trailer_path": "https://via.placeholder.com/640x480.png/002211?text=accusamus",
                                "image_path": "https://via.placeholder.com/640x480.png/0077ff?text=officiis",
                                "release_date": "1997-10-08 00:00:00",
                                "rating": 9,
                                "nbr_views": 404463800,
                                "created_at": "2023-02-24 14:38:05",
                                "updated_at": "2023-02-24 14:38:05"
                            }, ...
                        ]
4-	 As a user, I should be able to view, in the movies and series pages, all the movies/series available in batches of 10 
 http://localhost/api/getListMovies?limit=10&offset=0
 response : "data": [
                        {
                            "movie_id": 1,
                            "title": "Dr.",
                            "image_path": "https://via.placeholder.com/640x480.png/0022aa?text=deserunt",
                            "rating": 4,
                            "name": "Ms."
                        }, ... 
                        ]
5-	As a user, I should be able to add a movie or a series to my favorites list 
    http://localhost/api/addMovieToFavoritesList?movie_id=4   ( also send in postman => authorization =>  barear token   the  api_token returned in login ) 
    response :  
              {
                "data": [],
                "success": true,
                "message": "movie added to Favorit list"
              }
6-	As a user, I should be able to delete a movie or a series from my favorites list
    http://localhost/api/removeMovieFromFavoritesList?movie_id=1 ( also send in postman => authorization =>  barear token   the  api_token returned in login )
    response : 
            {
                "data": [],
                "success": true,
                "message": "movie removed from Favorit list"
            }
7-	 As a user, I should be able to view the list of my favorite movies and series
    http://localhost/api/getMoviesFavorites?  ( also send in postman => authorization =>  barear token   the  api_token returned in login )
    response :  
                {
                    "data": [
                        {
                            "movie_id": 3,
                            "title": "Prof.",
                            "name": "Prof."
                        },
                        {
                            "movie_id": 4,
                            "title": "Miss",
                            "name": "Dr."
                        }
                    ],
                    "success": true,
                    "message": "ok"
                }
8-	As a user, I should be able to search for movies and series
    http://localhost/api/getListMovies?limit=10&offset=0&name=prof
    reponse : 
            "data": [
                        {
                            "movie_id": 1,
                            "title": "Dr.",
                            "image_path": "https://via.placeholder.com/640x480.png/0022aa?text=deserunt",
                            "rating": 4,
                            "name": "Ms."
                        }, ... 
                        ]
9-	As a user, I should be able to view the details of a movie or series 
        http://localhost/api/getListMoviesDetails?movie_id=1
        response :
                "data": [
                {
                    "movie_id": 1,
                    "name": "Ms.",
                    "title": "Dr.",
                    "descreption": "90897",
                    "trailer_path": "https://via.placeholder.com/640x480.png/003333?text=et",
                    "image_path": "https://via.placeholder.com/640x480.png/0022aa?text=deserunt",
                    "release_date": "1981-10-11 00:00:00",
                    "rating": 4,
                    "nbr_views": 94762903,
                    "created_at": "2023-02-24 14:37:24",
                    "updated_at": "2023-02-24 14:37:24"
                }
10-	As a user, I should be able to watch the trailer of a movie or series
    http://localhost/api/getMoviesTrailer?movie_id=1
    response :
      "data": [
                {
                    "trailer_path": "https://via.placeholder.com/640x480.png/003333?text=et"
                }
              ]
