# Krypt

Share short-lived encrypted text messages with others.

## About

I wrote this for personal use and figured I'd release it as open-source software for others to host on their own servers too.

It's essentially a secret-sharing application that is hyper minimalistic. There's no styling, because who needs it? All you want to do it share some text with somebody else.

## Process

1. Visit `/` and create your note. Give it a name and some text for the message itself.
2. Once you've created the note, you'll be redirected to a new `/{uuid}?signature={signature}` url. Use this URL to share the note with other people. It's a signed URL so if the signature or URL is tampered with, the request won't work and the user will be shown an error. 
3. Your note will be deleted after **1 hour**, so any attempt to view the URL you previously shared will result in a 404.

> The `/create` route is used by the `<form>` to create the message. This has a rate limit of 3 submissions per 60 seconds (1 minute) to prevent spam attacks on the creation endpoint. The rate limit uses the user's IP address to determine if the request is unique or not.

## Installing on your own server

To install Krypt on your own server, you should:

1. Fork this repository to your own GitHub account.
2. Deploy the application like any ordinary Laravel application (Why not give [Ploi (referral link)](https://ploi.io/register?referrer=7lH81uCGeuTg45Otse3p) a go?).
    * Create a database.
    * Copy the environment file.
    * Generate an `APP_KEY` using `artisan key:generate`.
    * Migrate the database using `artisan migrate`.
3. Follow steps above to use Krypt. 

## Future Development

* [ ] Support custom expiry times.
* [ ] Maybe add a tiny bit of styling so that it doesn't hurt your eyes _too_ much.
