# pico-md-checkbox

Plugin for PicoCMS which converts Markdown checkboxes into HTML checkboxes.

# Technical

Markdown checkboxes recognized in this style:
```
- [ ] Unchecked Todo
- [x] Checked Todo
```

These are still replaced in the Markdown content, whereby the leading `- ` is retained.

The end result is still a list with the corresponding checkboxes as HTML.
Example output in Markdown format:

```
- <input type="checkbox" />
- <input type="checkbox" checked />
```