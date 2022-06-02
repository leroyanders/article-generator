from spinrewriterapi import SpinRewriterAPI

# your Spin Rewriter email address goes here
email_address = "liroy.booking@icloud.com"

# your unique Spin Rewriter API key goes here
api_key = "0ba6460#f526c75_0639994?3ca70a6"

# Spin Rewriter API settings - authentication:
spinrewriter_api = SpinRewriterAPI(email_address, api_key)

protected_terms = "[n]" # protect new line tag
spinrewriter_api.set_protected_terms(protected_terms)
spinrewriter_api.set_auto_protected_terms(False)

# low / medium / high
spinrewriter_api.set_confidence_level("medium")

# (optional) Set whether the One-Click Rewrite process uses nested spinning syntax (multi-level spinning) or not.
spinrewriter_api.set_nested_spintax(True)

# (optional) Set whether Spin Rewriter rewrites complete sentences on its own.
spinrewriter_api.set_auto_sentences(False)

# (optional) Set whether Spin Rewriter rewrites entire paragraphs on its own.
spinrewriter_api.set_auto_paragraphs(False)

# (optional) Set whether Spin Rewriter writes additional paragraphs on its own.
spinrewriter_api.set_auto_new_paragraphs(False)

# (optional) Set whether Spin Rewriter changes the entire structure of phrases and sentences.
spinrewriter_api.set_auto_sentence_trees(False)

# (optional) Sets whether Spin Rewriter should only use synonyms (where available) when generating spun text.
spinrewriter_api.set_use_only_synonyms(False)

# (optional) Sets whether Spin Rewriter should intelligently randomize the order of paragraphs and lists when
# generating spun text.
spinrewriter_api.set_reorder_paragraphs(False)

# (optional) Sets whether Spin Rewriter should automatically enrich generated articles with headings, bulpoints, etc.
spinrewriter_api.set_add_html_markup(False)

# (optional) Sets whether Spin Rewriter should automatically convert line-breaks to HTML tags.
spinrewriter_api.set_use_html_linebreaks(False)

class SpinRewriter:
    def __init__(self, text):

        # Make the actual API request and save the response as a native JSON object.
        rephrase = spinrewriter_api.get_unique_variation(text)

        if rephrase:
            self.response = rephrase['response']
        else:
            self.response = text