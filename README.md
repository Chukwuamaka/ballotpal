# BallotPal
BallotPal is a customized miniature electronic voting application.

## Background Information
There are currently two versions of the app. Both versions were built with HTML and CSS.

The first version is a simple application that uses a simple filesystem to store data. Implementation was done mainly with PHP. Thus, a PHP-supported server is required to run it. The source code for `v1.0` can be found on the [v1.0 branch](https://github.com/Chukwuamaka/ballotpal/tree/v1.0).

The second version is more complex and features user authentication. Implementation was done with JavaScript (VanillaJS and Express), and a NodeJS server is required to run it. [NeDB](https://github.com/louischatriot/nedb) (a subset of MongoDB) was used to persist data. The source code for `v2.0` can be found on the [master branch](https://github.com/Chukwuamaka/ballotpal/tree/master).

## Usage
BallotPal was originally built for a specific user, to be used on devices connected to a local server via a wireless LAN connection. However, the app can also be used from a remote server and the source code can be modified to suit the user’s preferences, according to the provisions of the [license](https://github.com/Chukwuamaka/ballotpal/blob/master/LICENSE).

### From a Remote Server
- Download or clone this repository to a local directory on your device using the green `Clone or download` button in the desktop version of this page.
- Upload the downloaded files to a server of your choice.
- Open the app with the root URL provided by your hosting provider, **e.g.** [https://ballotpal.herokuapp.com](https://ballotpal.herokuapp.com)
- If you are a first time user, sign up as a user on the homepage. To sign up as an admin, go to `therooturl/admin`, **e.g.** [https://ballotpal.herokuapp.com/admin](https://ballotpal.herokuapp.com/admin). From the admin dashboard, you can check results and also reset results, in case a do-over is necessary. We advise that you get acquainted with the app's functionalities before using it for official purposes.

**Note:** The URLs provided on any part of this repository or its READMEs where versions of this app may have been hosted are for display and sample purposes only. Do not attempt to use the app from any of these URLs for official purposes.
