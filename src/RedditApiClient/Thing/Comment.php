<?php

namespace RedditApiClient\Thing;

use RedditApiClient\Thing;

class Comment extends Thing
{

    /**
     * The account name of the poster
     * @var string
     */
    public $author;

    /**
     * The CSS class of the author's flair. Subreddit specific.
     * @var string
     */
    public $author_flair_css_class;

    /**
     * The text of the author's flair. Subreddit specific.
     * @var string
     */
    public $author_flair_text;

    /**
     * The raw text. This is the unformatted text which includes the raw markup
     * characters such as ** for bold.
     * @var string
     */
    public $body;

    /**
     * The formatted html text. This is the html formatted version of the marked
     * up text. Items that are boldened by ** or *** will now have <em> or ***
     * tags on them. Additionally, bullets and numbered lists will now be in
     * html list format. NOTE: The html string will be escaped. You must
     * unescape to get the raw html.
     * @var string
     */
    public $body_html;

    /**
     * @var string
     */
    public $link_id;

    /**
     * @var string
     */
    public $parent_id;

    /**
     * Subreddit of thing excluding the /r/ prefix. "pics"
     * @var string
     */
    public $subreddit;

    /**
     * @var string
     */
    public $subreddit_id;
}
