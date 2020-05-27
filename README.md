# BallotPal
BallotPal is a customized miniature electronic voting application.

## Background Information
There are currently two versions of the app. Both versions were built with HTML and CSS.

The first version is a simple application that uses a simple filesystem to store data. Implementation was done mainly with PHP. Thus, a PHP-supported server is required to run it. The source code for `v1.0` can be found on the [v1.0 branch](https://github.com/Chukwuamaka/ballotpal/tree/v1.0).

The second version is more complex and features user authentication. Implementation was done with JavaScript (VanillaJS and Express), and a NodeJS server is required to run it. [NeDB](https://github.com/louischatriot/nedb) (a subset of MongoDB) was used to persist data. The source code for `v2.0` can be found on [this branch](https://github.com/Chukwuamaka/ballotpal/tree/master).

## Usage
BallotPal was originally built for a specific user, to be used on devices connected to a local server via a wireless LAN connection. However, the app can also be used from a remote server and the source code can be modified to suit the user’s preferences, according to the provisions of the [license](https://github.com/Chukwuamaka/ballotpal/blob/master/LICENSE).

If you prefer using `v1.0`, check [v1.0](https://github.com/Chukwuamaka/ballotpal/tree/v1.0/README.md) for usage instructions.

### Downloading the Files
You can download the files by:
1. clicking the green `Clone or download` button at the top of this page, and **Download ZIP** if you want to get a zipped folder containing all the required files or **Open in Desktop** if you have a Github Desktop client already installed on your device.
2. using the `Command Prompt (Windows)` or `Terminal (Linux, Mac OS X)`: To bring up a regular Command Prompt, press **Windows Key**+R to open the **Run** box, type **cmd** and then click **OK**. To bring up a Linux terminal, press **Ctrl**+**Alt**+**T**. On Mac OS X, press **Command**+**Space** to open **Spotlight**, type **Terminal** and then click the desired result.

     - Install git on your device, if it's not already installed. Go to [https://git-scm.com](https://git-scm.com) to install git. During installation, when you come across the prompt shown in the image below, I recommend you choose the second option, as shown below also.
     
       ![](https://www.woodwardweb.com/Windows-Live-Writer/Setting-up-the-perfect-Git-environment-o_906F/image_4.png)
       
       After installation, open Command Prompt or Terminal and run (type and press **Enter**) `git --version`. If it returns details of the version of git you installed, your installation was successful, but if it returns an error, something must have gone wrong somewhere. Figure it out :wink:!
       
     - If your installation was successful, change the directory to the preferred location you would like to clone or download the app's files. If you haven't the faintest idea how to do this, follow [this guide](https://www.digitalcitizen.life/command-prompt-how-use-basic-commands) for Windows users. If you are on a Mac, check [this](https://www.macworld.com/article/2042378/master-the-command-line-navigating-files-and-folders.html), and for Linux users, check [here](https://www.cyberciti.biz/faq/how-to-change-directory-in-linux-terminal/). To use git bash in place of the Command Prompt or Terminal, follow [this guide](https://www.toolsqa.com/git/common-directory-commands-on-git-bash/) instead.
     - After changing to your preferred directory, run `git clone https://github.com/Chukwuamaka/ballotpal.git`. If you prefer downloading v1.0 files, run `git clone -b v1.0 https://github.com/Chukwuamaka/ballotpal.git` instead. You should see something like this if your download was successful.
     ```

### Using BallotPal from a Remote Server
- Upload the downloaded files to a server of your choice.
- Open the app with the root URL provided by your hosting provider, **e.g.** [https://ballotpal.herokuapp.com](https://ballotpal.herokuapp.com)
- If you are a first time user, sign up as a user on the homepage. To sign up as an admin, go to `therooturl/admin`, **e.g.** [https://ballotpal.herokuapp.com/admin](https://ballotpal.herokuapp.com/admin). From the admin dashboard, you can check results and also reset results, in case a do-over is necessary. For the purpose of accuracy, reset all results before using the app for any electoral process. We advise that you get acquainted with the app's functionalities before using it for official purposes. 

**Note:** The URLs provided on any part of this repository or its READMEs where versions of this app may have been hosted are for display and sampling purposes only. Do not attempt to use the app from any of these URLs for official purposes.

**_More details loading..._**
