[![PHP](https://github.com/yisraeldov/bhbst/actions/workflows/php.yml/badge.svg)](https://github.com/yisraeldov/bhbst/actions/workflows/php.yml)


# Provides 2 classes for custom reordering of Paragrahps


## Task 1


``` php
	$reorder = new ParagraphReordererByLen();
	$reorderedText = $reorder->reorder($originalText);
```


## Task 2
``` php
	$reorder = new ParagraphReordererCustomAlapha();
	$reorderedText = $reorder->reorder($originalText);
```

See the [test cases](./tests/)


# AI Usuage disclosure.

From the requirements:

> Please do not use any AI tools like ChatGPT or Gemini, etc., but you
> can use Google for search.

I **did not** use any LLM tools for the coding. I did use LLM to
translate the requirements document from PDF to Markdown for easier
reading inside of IDE. I also have a plugin that uses LLM to suggest
commit messages, that was also used. All the code was written with out
LLMs
