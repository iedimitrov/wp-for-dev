<?php
/*
Plugin Name: Whoots
Plugin URI: https://wordpress.org/plugins/whoots
Description: This plugin lists cat quotes, so it breaks your mousey daily routine. You'll see them in the upper right of your admin screen on every page.
Author: Ivan Dimitrov
Version: 1.0
Author URI: http://uni.cloudskyhigh.net
*/

function whoots_get_lines() {
	/** These are the funny quotes, known as whoots */
	$lines = "What greater gift than the love of a cat. -- Charles Dickens
In a cat's eye, all things belong to cats. -- Unknown
There are two means of refuge from the miseries of life: music and cats. -- Albert Schweitzer
A lie is like a cat: you need to stop it before it gets out the door or it’s really hard to catch. -- Charles M. Blow
A cat will be your friend, but never your slave. -- Theophile Gautier
It is impossible to keep a straight face in the presence of one or more kittens. -- Cynthia E. Varnado
No home is complete without the pitter patter of kitty feet. -- Unknown
As every cat owner knows, nobody owns a cat. -- Ellen Perry Berkeley
If cats could talk, they wouldn’t. -- Nan Porter
The only thing a cat worries about is what's happening right now. -- Lloyd Alexander
Cats have it all: admiration, an endless sleep, and company only when they want it. -- Rod McKuen
If cats could write history, their history would be mostly about cats. -- Eugen Weber
Are cats strange animals or do they so resemble us that we find them curious as we do monkeys? -- John Steinbeck
A man who carries a cat by the tail learns something he can learn in no other way. -- Mark Twain
Like all pure creatures, cats are practical. -- William S. Burroughs
Cats are connoisseurs of comfort. -- James Herriot
The problem with cats is that they get the same exact look whether they see a moth or an axe-murderer. -- Paula Poundstone
People who don't like cats were probably mice in an earlier life. -- Unknown
When Rome burned, the emperor's cats still expected to be fed on time. -- Seanan McGuire
Cats are a mysterious kind of folk. -- Sir Walter Scott
There are few things in life more heartwarming than to be welcomed by a cat. -- Tay Hohoff
A kitten is, in the animal world, what a rosebud is in the garden. -- Robert Sowthey
Cats know how to obtain food without labor, shelter without confinement, and love without penalties. -- W.L. George
In ancient times cats were worshipped as gods; they have not forgotten this. -- Terry Pratchett
A cat has absolute emotional honesty: human beings, for one reason or another, may hide their feelings, but a cat does not. -- Ernest Hemingway";

	// Here we split it into lines.
	$lines = explode( "\n", $lines );

	// And then randomly choose a line.
	return wptexturize( $lines[ mt_rand( 0, count( $lines ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later.
function whoots() {
	$chosen = whoots_get_lines();
	$lang   = '';
	if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
		$lang = ' lang="en"';
	}

	printf(
		'<p id="whoots"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
		__( 'Quote from Funny quotes, by Ivan Dimitrov:' ),
		$lang,
		$chosen
	);
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'whoots' );

// We need some CSS to position the paragraph.
function whoots_css() {
	echo "
	<style type='text/css'>
	#whoots {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
	}
	.rtl #whoots {
		float: left;
	}
	.block-editor-page #whoots {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#whoots,
		.rtl #whoots {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'whoots_css' );
