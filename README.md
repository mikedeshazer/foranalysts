# Example Codebase

This code can be viewed here: 
[Site](https://sleepy-hamlet-96224.herokuapp.com/) 

## What is this?

All code can be found in the "web" folder.

This is super simple and meant to demonstrate how the algos you are writing will be used by analyst teams.

Basically, if you're doing sentiment analysis, fork this repo, deploy to heroku, and get you other endpoint to integrate with this so it does the task you have been tasked with.

Obviously, your algo might be java, php, ruby, python... anything. So you are deploying that as a seperate heroku or AWS app. Then, you are using your clone of this app to call your endpoint, run the algo, and spit the results onto your cloned version.

The cloud folder inside "web" folder (data.php), fetches a crypto's historical price data based on time ranges (in epoch time). You can swap out "ethereum" in the URL in data.php with "bitcoin" to get bitcoin's price.... or any other currency

This example is barebones and demonstrates how the data should be rendered. Please contact your manager to figure out how/what you're doing/integrating.

