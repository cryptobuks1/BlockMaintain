## There are a few endpoints that exist which could be used for user registration: logging in and out

## Editing the GPUs / Cryptocurrencies are very basic and are left commented out for this task.

## The main endpoint which you can use when calling from command line is:

http://blockmaintain.playful.club/api/whattomine/1/18
- WHERE 1 = type of GPU {[1]=>Nvidia 1060, [2]=>AMD RX570} AND 18 = number of GPUs

## EXAMPLE of curl request from command line AUTHORIZATION NEEDED IN REQUEST


curl -X GET http://blockmaintain.playful.club/api/whattomine/1/18 -H "Accept: application/json" -H "Content-type: application/json" -H "Authorization: Bearer ROGH2qgw4pLGN20mBGlTDgaV8GnjITAcyil771NdVi1xM56WS1tRL70V5Mcb"



## You should be able to use that authorization token but incase you can't simply create a new user by running the following in command line:


curl -X POST http://blockmaintain.playful.club/api/register
-H "Accept: application/json"
-H "Content-Type: application/json"
-d '{"name": "your_name", "email": "your_fake_email@hello.com", "password": "password", "password_confirmation": "password"}'

This returns your new API key which can then be used in the /api/whattomine call.
