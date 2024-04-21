<style>
    /*
 * CKEditor 5 (v41.2.0) content styles.
 * Generated on Wed, 13 Mar 2024 14:06:33 GMT.
 * For more information, check out https://ckeditor.com/docs/ckeditor5/latest/installation/advanced/content-styles.html
 */

    :root {
        --ck-color-image-caption-background: hsl(0, 0%, 97%);
        --ck-color-image-caption-text: hsl(0, 0%, 20%);
        --ck-color-mention-background: hsla(341, 100%, 30%, 0.1);
        --ck-color-mention-text: hsl(341, 100%, 30%);
        --ck-color-selector-caption-background: hsl(0, 0%, 97%);
        --ck-color-selector-caption-text: hsl(0, 0%, 20%);
        --ck-highlight-marker-blue: hsl(201, 97%, 72%);
        --ck-highlight-marker-green: hsl(120, 93%, 68%);
        --ck-highlight-marker-pink: hsl(345, 96%, 73%);
        --ck-highlight-marker-yellow: hsl(60, 97%, 73%);
        --ck-highlight-pen-green: hsl(112, 100%, 27%);
        --ck-highlight-pen-red: hsl(0, 85%, 49%);
        --ck-image-style-spacing: 1.5em;
        --ck-inline-image-style-spacing: calc(var(--ck-image-style-spacing) / 2);
        --ck-todo-list-checkmark-size: 16px;
    }

    /* @ckeditor/ckeditor5-table/theme/tablecolumnresize.css */
    .ck-content .table .ck-table-resized {
        table-layout: fixed;
    }

    /* @ckeditor/ckeditor5-table/theme/tablecolumnresize.css */
    .ck-content .table table {
        overflow: hidden;
    }

    /* @ckeditor/ckeditor5-table/theme/tablecolumnresize.css */
    .ck-content .table td,
    .ck-content .table th {
        overflow-wrap: break-word;
        position: relative;
    }

    /* @ckeditor/ckeditor5-table/theme/tablecaption.css */
    .ck-content .table>figcaption {
        display: table-caption;
        caption-side: top;
        word-break: break-word;
        text-align: center;
        color: var(--ck-color-selector-caption-text);
        background-color: var(--ck-color-selector-caption-background);
        padding: .6em;
        font-size: .75em;
        outline-offset: -1px;
    }

    /* @ckeditor/ckeditor5-table/theme/table.css */
    .ck-content .table {
        margin: 0.9em auto;
        display: table;
    }

    /* @ckeditor/ckeditor5-table/theme/table.css */
    .ck-content .table table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        height: 100%;
        border: 1px double hsl(0, 0%, 70%);
    }

    /* @ckeditor/ckeditor5-table/theme/table.css */
    .ck-content .table table td,
    .ck-content .table table th {
        min-width: 2em;
        padding: .4em;
        border: 1px solid hsl(0, 0%, 75%);
    }

    /* @ckeditor/ckeditor5-table/theme/table.css */
    .ck-content .table table th {
        font-weight: bold;
        background: hsla(0, 0%, 0%, 5%);
    }

    /* @ckeditor/ckeditor5-table/theme/table.css */
    .ck-content[dir="rtl"] .table th {
        text-align: right;
    }

    /* @ckeditor/ckeditor5-table/theme/table.css */
    .ck-content[dir="ltr"] .table th {
        text-align: left;
    }

    /* @ckeditor/ckeditor5-page-break/theme/pagebreak.css */
    .ck-content .page-break {
        position: relative;
        clear: both;
        padding: 5px 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* @ckeditor/ckeditor5-page-break/theme/pagebreak.css */
    .ck-content .page-break::after {
        content: '';
        position: absolute;
        border-bottom: 2px dashed hsl(0, 0%, 77%);
        width: 100%;
    }

    /* @ckeditor/ckeditor5-page-break/theme/pagebreak.css */
    .ck-content .page-break__label {
        position: relative;
        z-index: 1;
        padding: .3em .6em;
        display: block;
        text-transform: uppercase;
        border: 1px solid hsl(0, 0%, 77%);
        border-radius: 2px;
        font-family: Helvetica, Arial, Tahoma, Verdana, Sans-Serif;
        font-size: 0.75em;
        font-weight: bold;
        color: hsl(0, 0%, 20%);
        background: hsl(0, 0%, 100%);
        box-shadow: 2px 2px 1px hsla(0, 0%, 0%, 0.15);
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* @ckeditor/ckeditor5-media-embed/theme/mediaembed.css */
    .ck-content .media {
        clear: both;
        margin: 0.9em 0;
        display: block;
        min-width: 15em;
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-content .todo-list {
        list-style: none;
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-content .todo-list li {
        position: relative;
        margin-bottom: 5px;
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-content .todo-list li .todo-list {
        margin-top: 5px;
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-content .todo-list .todo-list__label>input {
        -webkit-appearance: none;
        display: inline-block;
        position: relative;
        width: var(--ck-todo-list-checkmark-size);
        height: var(--ck-todo-list-checkmark-size);
        vertical-align: middle;
        border: 0;
        left: -25px;
        margin-right: -15px;
        right: 0;
        margin-left: 0;
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-content[dir=rtl] .todo-list .todo-list__label>input {
        left: 0;
        margin-right: 0;
        right: -25px;
        margin-left: -15px;
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-content .todo-list .todo-list__label>input::before {
        display: block;
        position: absolute;
        box-sizing: border-box;
        content: '';
        width: 100%;
        height: 100%;
        border: 1px solid hsl(0, 0%, 20%);
        border-radius: 2px;
        transition: 250ms ease-in-out box-shadow;
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-content .todo-list .todo-list__label>input::after {
        display: block;
        position: absolute;
        box-sizing: content-box;
        pointer-events: none;
        content: '';
        left: calc(var(--ck-todo-list-checkmark-size) / 3);
        top: calc(var(--ck-todo-list-checkmark-size) / 5.3);
        width: calc(var(--ck-todo-list-checkmark-size) / 5.3);
        height: calc(var(--ck-todo-list-checkmark-size) / 2.6);
        border-style: solid;
        border-color: transparent;
        border-width: 0 calc(var(--ck-todo-list-checkmark-size) / 8) calc(var(--ck-todo-list-checkmark-size) / 8) 0;
        transform: rotate(45deg);
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-content .todo-list .todo-list__label>input[checked]::before {
        background: hsl(126, 64%, 41%);
        border-color: hsl(126, 64%, 41%);
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-content .todo-list .todo-list__label>input[checked]::after {
        border-color: hsl(0, 0%, 100%);
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-content .todo-list .todo-list__label .todo-list__label__description {
        vertical-align: middle;
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-content .todo-list .todo-list__label.todo-list__label_without-description input[type=checkbox] {
        position: absolute;
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-editor__editable.ck-content .todo-list .todo-list__label>input,
    .ck-editor__editable.ck-content .todo-list .todo-list__label>span[contenteditable=false]>input {
        cursor: pointer;
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-editor__editable.ck-content .todo-list .todo-list__label>input:hover::before,
    .ck-editor__editable.ck-content .todo-list .todo-list__label>span[contenteditable=false]>input:hover::before {
        box-shadow: 0 0 0 5px hsla(0, 0%, 0%, 0.1);
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-editor__editable.ck-content .todo-list .todo-list__label>span[contenteditable=false]>input {
        -webkit-appearance: none;
        display: inline-block;
        position: relative;
        width: var(--ck-todo-list-checkmark-size);
        height: var(--ck-todo-list-checkmark-size);
        vertical-align: middle;
        border: 0;
        left: -25px;
        margin-right: -15px;
        right: 0;
        margin-left: 0;
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-editor__editable.ck-content[dir=rtl] .todo-list .todo-list__label>span[contenteditable=false]>input {
        left: 0;
        margin-right: 0;
        right: -25px;
        margin-left: -15px;
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-editor__editable.ck-content .todo-list .todo-list__label>span[contenteditable=false]>input::before {
        display: block;
        position: absolute;
        box-sizing: border-box;
        content: '';
        width: 100%;
        height: 100%;
        border: 1px solid hsl(0, 0%, 20%);
        border-radius: 2px;
        transition: 250ms ease-in-out box-shadow;
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-editor__editable.ck-content .todo-list .todo-list__label>span[contenteditable=false]>input::after {
        display: block;
        position: absolute;
        box-sizing: content-box;
        pointer-events: none;
        content: '';
        left: calc(var(--ck-todo-list-checkmark-size) / 3);
        top: calc(var(--ck-todo-list-checkmark-size) / 5.3);
        width: calc(var(--ck-todo-list-checkmark-size) / 5.3);
        height: calc(var(--ck-todo-list-checkmark-size) / 2.6);
        border-style: solid;
        border-color: transparent;
        border-width: 0 calc(var(--ck-todo-list-checkmark-size) / 8) calc(var(--ck-todo-list-checkmark-size) / 8) 0;
        transform: rotate(45deg);
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-editor__editable.ck-content .todo-list .todo-list__label>span[contenteditable=false]>input[checked]::before {
        background: hsl(126, 64%, 41%);
        border-color: hsl(126, 64%, 41%);
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-editor__editable.ck-content .todo-list .todo-list__label>span[contenteditable=false]>input[checked]::after {
        border-color: hsl(0, 0%, 100%);
    }

    /* @ckeditor/ckeditor5-list/theme/todolist.css */
    .ck-editor__editable.ck-content .todo-list .todo-list__label.todo-list__label_without-description input[type=checkbox] {
        position: absolute;
    }

    /* @ckeditor/ckeditor5-image/theme/imageresize.css */
    .ck-content img.image_resized {
        height: auto;
    }

    /* @ckeditor/ckeditor5-image/theme/imageresize.css */
    .ck-content .image.image_resized {
        max-width: 100%;
        display: block;
        box-sizing: border-box;
    }

    /* @ckeditor/ckeditor5-image/theme/imageresize.css */
    .ck-content .image.image_resized img {
        width: 100%;
    }

    /* @ckeditor/ckeditor5-image/theme/imageresize.css */
    .ck-content .image.image_resized>figcaption {
        display: block;
    }

    /* @ckeditor/ckeditor5-image/theme/imagecaption.css */
    .ck-content .image>figcaption {
        display: table-caption;
        caption-side: bottom;
        word-break: break-word;
        color: var(--ck-color-image-caption-text);
        background-color: var(--ck-color-image-caption-background);
        padding: .6em;
        font-size: .75em;
        outline-offset: -1px;
    }

    /* @ckeditor/ckeditor5-image/theme/image.css */
    .ck-content .image {
        display: table;
        clear: both;
        text-align: center;
        margin: 0.9em auto;
        min-width: 50px;
    }

    /* @ckeditor/ckeditor5-image/theme/image.css */
    .ck-content .image img {
        display: block;
        margin: 0 auto;
        max-width: 100%;
        min-width: 100%;
        height: auto;
    }

    /* @ckeditor/ckeditor5-image/theme/image.css */
    .ck-content .image-inline {
        /*
     * Normally, the .image-inline would have "display: inline-block" and "img { width: 100% }" (to follow the wrapper while resizing).;
     * Unfortunately, together with "srcset", it gets automatically stretched up to the width of the editing root.
     * This strange behavior does not happen with inline-flex.
     */
        display: inline-flex;
        max-width: 100%;
        align-items: flex-start;
    }

    /* @ckeditor/ckeditor5-image/theme/image.css */
    .ck-content .image-inline picture {
        display: flex;
    }

    /* @ckeditor/ckeditor5-image/theme/image.css */
    .ck-content .image-inline picture,
    .ck-content .image-inline img {
        flex-grow: 1;
        flex-shrink: 1;
        max-width: 100%;
    }

    /* @ckeditor/ckeditor5-image/theme/imagestyle.css */
    .ck-content .image-style-block-align-left,
    .ck-content .image-style-block-align-right {
        max-width: calc(100% - var(--ck-image-style-spacing));
    }

    /* @ckeditor/ckeditor5-image/theme/imagestyle.css */
    .ck-content .image-style-align-left,
    .ck-content .image-style-align-right {
        clear: none;
    }

    /* @ckeditor/ckeditor5-image/theme/imagestyle.css */
    .ck-content .image-style-side {
        float: right;
        margin-left: var(--ck-image-style-spacing);
        max-width: 50%;
    }

    /* @ckeditor/ckeditor5-image/theme/imagestyle.css */
    .ck-content .image-style-align-left {
        float: left;
        margin-right: var(--ck-image-style-spacing);
    }

    /* @ckeditor/ckeditor5-image/theme/imagestyle.css */
    .ck-content .image-style-align-center {
        margin-left: auto;
        margin-right: auto;
    }

    /* @ckeditor/ckeditor5-image/theme/imagestyle.css */
    .ck-content .image-style-align-right {
        float: right;
        margin-left: var(--ck-image-style-spacing);
    }

    /* @ckeditor/ckeditor5-image/theme/imagestyle.css */
    .ck-content .image-style-block-align-right {
        margin-right: 0;
        margin-left: auto;
    }

    /* @ckeditor/ckeditor5-image/theme/imagestyle.css */
    .ck-content .image-style-block-align-left {
        margin-left: 0;
        margin-right: auto;
    }

    /* @ckeditor/ckeditor5-image/theme/imagestyle.css */
    .ck-content p+.image-style-align-left,
    .ck-content p+.image-style-align-right,
    .ck-content p+.image-style-side {
        margin-top: 0;
    }

    /* @ckeditor/ckeditor5-image/theme/imagestyle.css */
    .ck-content .image-inline.image-style-align-left,
    .ck-content .image-inline.image-style-align-right {
        margin-top: var(--ck-inline-image-style-spacing);
        margin-bottom: var(--ck-inline-image-style-spacing);
    }

    /* @ckeditor/ckeditor5-image/theme/imagestyle.css */
    .ck-content .image-inline.image-style-align-left {
        margin-right: var(--ck-inline-image-style-spacing);
    }

    /* @ckeditor/ckeditor5-image/theme/imagestyle.css */
    .ck-content .image-inline.image-style-align-right {
        margin-left: var(--ck-inline-image-style-spacing);
    }

    /* @ckeditor/ckeditor5-highlight/theme/highlight.css */
    .ck-content .marker-yellow {
        background-color: var(--ck-highlight-marker-yellow);
    }

    /* @ckeditor/ckeditor5-highlight/theme/highlight.css */
    .ck-content .marker-green {
        background-color: var(--ck-highlight-marker-green);
    }

    /* @ckeditor/ckeditor5-highlight/theme/highlight.css */
    .ck-content .marker-pink {
        background-color: var(--ck-highlight-marker-pink);
    }

    /* @ckeditor/ckeditor5-highlight/theme/highlight.css */
    .ck-content .marker-blue {
        background-color: var(--ck-highlight-marker-blue);
    }

    /* @ckeditor/ckeditor5-highlight/theme/highlight.css */
    .ck-content .pen-red {
        color: var(--ck-highlight-pen-red);
        background-color: transparent;
    }

    /* @ckeditor/ckeditor5-highlight/theme/highlight.css */
    .ck-content .pen-green {
        color: var(--ck-highlight-pen-green);
        background-color: transparent;
    }

    /* @ckeditor/ckeditor5-block-quote/theme/blockquote.css */
    .ck-content blockquote {
        overflow: hidden;
        padding-right: 1.5em;
        padding-left: 1.5em;
        margin-left: 0;
        margin-right: 0;
        font-style: italic;
        border-left: solid 5px hsl(0, 0%, 80%);
    }

    /* @ckeditor/ckeditor5-block-quote/theme/blockquote.css */
    .ck-content[dir="rtl"] blockquote {
        border-left: 0;
        border-right: solid 5px hsl(0, 0%, 80%);
    }

    /* @ckeditor/ckeditor5-basic-styles/theme/code.css */
    .ck-content code {
        background-color: hsla(0, 0%, 78%, 0.3);
        padding: .15em;
        border-radius: 2px;
    }

    /* @ckeditor/ckeditor5-font/theme/fontsize.css */
    .ck-content .text-tiny {
        font-size: .7em;
    }

    /* @ckeditor/ckeditor5-font/theme/fontsize.css */
    .ck-content .text-small {
        font-size: .85em;
    }

    /* @ckeditor/ckeditor5-font/theme/fontsize.css */
    .ck-content .text-big {
        font-size: 1.4em;
    }

    /* @ckeditor/ckeditor5-font/theme/fontsize.css */
    .ck-content .text-huge {
        font-size: 1.8em;
    }

    /* @ckeditor/ckeditor5-mention/theme/mention.css */
    .ck-content .mention {
        background: var(--ck-color-mention-background);
        color: var(--ck-color-mention-text);
    }

    /* @ckeditor/ckeditor5-horizontal-line/theme/horizontalline.css */
    .ck-content hr {
        margin: 15px 0;
        height: 4px;
        background: hsl(0, 0%, 87%);
        border: 0;
    }

    /* @ckeditor/ckeditor5-code-block/theme/codeblock.css */
    .ck-content pre {
        padding: 1em;
        color: hsl(0, 0%, 20.8%);
        background: hsla(0, 0%, 78%, 0.3);
        border: 1px solid hsl(0, 0%, 77%);
        border-radius: 2px;
        text-align: left;
        direction: ltr;
        tab-size: 4;
        white-space: pre-wrap;
        font-style: normal;
        min-width: 200px;
    }

    /* @ckeditor/ckeditor5-code-block/theme/codeblock.css */
    .ck-content pre code {
        background: unset;
        padding: 0;
        border-radius: 0;
    }

    @media print {

        /* @ckeditor/ckeditor5-page-break/theme/pagebreak.css */
        .ck-content .page-break {
            padding: 0;
        }

        /* @ckeditor/ckeditor5-page-break/theme/pagebreak.css */
        .ck-content .page-break::after {
            display: none;
        }
    }

    .ck-content ol {
        list-style-type: decimal;
        padding-left: 35px;
        /* Menambahkan padding-left */
    }

    .ck-content ol li {
        margin-bottom: 10px;
    }

    .ck-content ul {
        list-style-type: disc;
        padding-left: 35px;
        /* Menambahkan padding-left */
    }

    .ck-content ul li {
        margin-bottom: 10px;
    }

    .ck-content ul li::before {
        content: "\25CF";
        /* bullet bulat */
        color: hsl(0, 0%, 0%);
        margin-right: 5px;
        display: inline-block;
        vertical-align: middle;
        margin-left: -20px;
    }

    .ck-content ol li::before {
        content: counter(list-item) ". ";
        color: hsl(0, 0%, 0%);
        margin-right: 5px;
        display: inline-block;
        vertical-align: middle;
        margin-left: -20px;
    }
</style>
