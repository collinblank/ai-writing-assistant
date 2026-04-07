# AI Writing Assistant

## Current Status
In Progress.  Next steps are setting up calls to Anthropic's API. 

## Description
Plugin is being built to have a quick assistant accessible in the middle of post and page writing on WordPress.  Creating the ability to call Anthropic's API to have it correct, or upgrade, your writing on the fly.  

## Demo
*Set up when completed*

## Features
- Quick key command on highlighted text to get a quick response from Anthropic's API.

## Tech & Tools Used
- getSelection() *JS*
- Ajax handler *JS fetch/PHP*
- WordPress
- Anthropic API

## How It Works
When inside a post or page and writing content in the gutenberg editor, highlight the text you want to have corrected for you.  Once the text is highlighted, use the **SHIFT + CTRL + H** key command shortcut to send your highlighted text to Anthropic's API.  Anthropic's API will respond with a text update you can then choose to accept, or ignore.

## Installation & Setup
*Coming soon upon completion*

## Usage
Use for all post and page updates by content editors to allow a quick flow of ideas and a quick, smart AI editor, directly into their natural work.

## Known Limitations
- Initial setup only includes a connection for Anthropic's API.  
- Release will only include version for Gutenberg editor.

## Future Ideas
- Work with Classic Editors
- More universal use with all AI APIs - user can choose and enter their own credentials.
- Better setting screen within each AI API set up to allow it to work best with their system.
- Include instructions for more information sent to AI API on corrections to writing needed.

## Background
Personal portfolio project built to deepen hands-on experience 
with the Anthropic Claude API and WordPress plugin architecture. 
Documenting the build process as a learning exercise in 
development and management.

## License
GPL-2.0-or-later