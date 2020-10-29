Custom Tracker
==============

The **Custom Tracker** sends you a notification if a certain page, file, or image is opened or viewed.
The purpose of this tracker is to verify if a file, page, or custom image has been opened by a recipient. If someone is prone to not open a necessary document, this tracker will verify they have done so.
The verification process is completed automatically in the tracking backend and **cannot** be forged.

### Contents
[1\. Requirements](#requirements)  
[2\. Setup](#setup)  
[3\. How it works](#how-it-works)  
[4\. Troubleshooting](#troubleshooting)

### Requirements
Because the Custom Tracker runs online, no specific hardware or software is required for use.
You will need the following free or already provided services:
*   An active email address.
*   A program or website that supports inserting images from links.
*   Services that use proxies to insert images from links, such as **Gmail** and **Discord**, have not produced accurate results and should not be used.
*   Devices capable of displaying transparent images.
*   An internet connection with 3G or faster connection speeds.

### Setup
Every tracking request begins with a link. You will need to make the link yourself, but it is a matter of putting the necessary pieces together.
You can build links automatically using [this special form.](https://www.glennjam.in/tracker/urlmaker.php)
To build a link, first take the tracking file's URL and the following variables:
The URL is: `https://www.glennjam.in/tracker/track.php`
You will also need to use the following variables after the URL: `event`, `email`, and the optional `imgurl`.
*   `event` is a name you can set yourself. There is no limit to what it can be called, however it cannot contain spaces.
*   `email` is the email address you would like tracking results sent to.
*   `imgurl` is an optional variable that allows you to use custom images from permanent links. If you do not use this variable, a transparent pixel will be displayed as a placeholder.
For this example, I will make a link with the event name grapefruit, the email test@example.com, and the image URL pointing to the image below.

![](https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Citrus_paradisi_%28Grapefruit%2C_pink%29.jpg/320px-Citrus_paradisi_%28Grapefruit%2C_pink%29.jpg)

["Citrus paradisi (Pink Grapefruit)" - (Aleph symbol)](https://commons.wikimedia.org/wiki/File:Citrus_paradisi_(Grapefruit,_pink).jpg)  
[CC BY-SA 2.5](https://creativecommons.org/licenses/by-sa/2.5), via Wikimedia Commons

The link starts with the main URL, `https://www.glennjam.in/tracker/track.php`, followed by a question mark. This will separate the main URL from the variables when we paste the full link into your program or website's embed window.

### How it works

### Troubleshooting
