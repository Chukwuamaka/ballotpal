# BallotPal
BallotPal is a customized miniature electronic voting application.

## Background Information
There are currently two versions of the app. Both versions were built with HTML and CSS.

The first version is a simple application that uses a simple filesystem to store data. Implementation was done mainly with PHP. Thus, a PHP-supported server is required to run it. The source code for `v1.0` can be found on the [v1.0 branch](https://github.com/Chukwuamaka/ballotpal/tree/v1.0).

The second version is more complex and features user authentication. Implementation was done with JavaScript (VanillaJS and Express), and a NodeJS server is required to run it. [NeDB](https://github.com/louischatriot/nedb) (a subset of MongoDB) was used to persist data. The source code for `v2.0` can be found on the [master branch](https://github.com/Chukwuamaka/ballotpal/tree/master).

## Usage
BallotPal was originally built for a specific user, to be used on devices connected to a local server via a wireless LAN connection. However, the app can also be used with a remote server and the source code can be modified to suit the user’s preferences, according to the provisions of the [license](https://github.com/Chukwuamaka/ballotpal/blob/master/LICENSE).

To use BallotPal from a remote server, go to [v1.0](https://bit.ly/2wc7g2g) for version 1.0 or [v2.0](ballotpal.herokuapp.com) for version 2.0.
