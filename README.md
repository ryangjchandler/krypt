# Krypt

Share short-lived encrypted text messages with others.

## About

I wrote this for personal use and figured I'd release it as open-source software for others to host on their own servers too.

It's essentially a secret-sharing application that is hyper minimalistic. There's no styling, because who needs it? All you want to do it share some text with somebody else.

## Process

1. Visit `/` and create your note. Give it a name and some text for the message itself.
2. Once you've created the note, you'll be redirected to a new `/{uuid}?signature={signature}` url. Use this URL to share the note with other people. It's a signed URL so if the signature or URL is tampered with, the request won't work and the user will be shown an error. 
3. Your note will be deleted after **1 hour**, so any attempt to view the URL you previously shared will result in a 404.

## Future Development

* [ ] Support custom expiry times.
* [ ] Maybe add a tiny bit of styling so that it doesn't hurt your eyes _too_ much.
