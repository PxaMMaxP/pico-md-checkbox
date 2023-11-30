<?php

class MdCheckbox extends AbstractPicoPlugin
{
    const API_VERSION = 2;

    /**
     * Triggered after Pico has prepared the raw file contents for parsing
     *
     * @see DummyPlugin::onContentParsing()
     * @see Pico::parseFileContent()
     * @see DummyPlugin::onContentParsed()
     *
     * @param string &$markdown Markdown contents of the requested page
     *
     * @return void
     */
    public function onContentPrepared(&$markdown)
    {
        $this->replace_md_checkboxes($markdown);

        return;
    }

    /**
     * Replace markdown checkboxes with html checkboxes
     *
     * @param string &$markdown Markdown contents of the requested page
     */
    private function replace_md_checkboxes(&$markdown)
    {
        $markdown = preg_replace('/- \[ \]/s', '- <input type="checkbox" />', $markdown);
        $markdown = preg_replace('/- \[x\]/s', '- <input type="checkbox" checked />', $markdown);
    }
}
