
# IE11 Time to Die
Let's help IE11 shed its mortal coil by displaying a simple notification popup to IE11 users letting them know that their browser is no longer receiving security updates, and websites may no longer display correctly. A link will encourage these visitors to switch to Microsoft Edge.

The plugin has no external dependencies and is written in vanilla javascript to be kept as minimal as possible. After the pop-up is displayed, local storage is used to save an object and suppress the popup for the next 24.

# Installation Instructions
Install on WordPress and enable the plugin. There are no configuration options and you can rest easy at night knowing you're doing your part in the fight.

# Frequently Asked Questions
## What does the pop-up look like?
Here's what IE11 users will see ([https://d.pr/i/bDzciJ](https://d.pr/i/bDzciJ)).

## The popup looks generic, shouldn't it more personal?
We tested both a branded and generic message when we first started doing this. The more personal and branded message resulted in a few angy support emails; no one wants that. The generic styled message has resulted in no support request to our clients and is now our recommended approach. Here's what that generic message to IE11 users looks like ([https://d.pr/i/bDzciJ](https://d.pr/i/bDzciJ)).

## How is IE11 detected?
    if(navigator.appName.indexOf("Internet Explorer")!=-1 || navigator.userAgent.match(/Trident.*rv[ :]*11\./)){// Do something}
