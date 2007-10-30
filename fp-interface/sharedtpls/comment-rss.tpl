<?xml version="1.0" encoding="{$fp_config.locale.charset}" ?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<channel>
	{entry_block}
		{entry}
		
		{assign var=the_comment_link value=$id|link:comments_link}
		<title>{$flatpress.title} » {$subject}</title>
		<link>{$the_comment_link}</link>
		<description><![CDATA[{$flatpress.subtitle}]]></description>
		<copyright>Copyright {$smarty.now|date_format:"$Y"}, {$flatpress.author}</copyright>
		<managingEditor>{$flatpress.email}</managingEditor>
		<language>{$flatpress.lang}</language>

		<generator>FlatPress</generator>
		
		{comment_block}
			{comment}
			<item>
		
			<title>{$name}</title>
			<link>{$the_comment_link}#{$id}</link>
			<description><![CDATA[{$content|tag:the_content}]]></description>
			
			<guid isPermaLink="true">{$the_comment_link}#{$id}</guid>

			<dc:creator>{$name}</dc:creator>
			<pubDate>{$date|date_format:"%a, %d %b %Y %H:%M:%S %z"}</pubDate>
			
			
			</item>
			{/comment}
		{/comment_block}
		{/entry}
		
	{/entry_block}
		
	</channel>
</rss>