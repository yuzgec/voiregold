/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {

	config.extraPlugins = 'colorbutton,youtube';

	// Define changes to default configuration here.
	// For complete reference see:
	// https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'insert'},
		{ name: 'links'},
		{ name: 'paragraph',groups: [ 'list', 'blocks', 'align', 'bidi']},
		{ name: 'styles'},
		{ name: 'colors'},
		{ name: 'document',groups: [ 'mode']},
		{ name: 'tools'},
	];

	config.toolbar = [
        { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'Youtube' ] }, // Embed butonu burada
        { name: 'links', items: [ 'Link', 'Unlink' ] },
        { name: 'paragraph', groups: [ 'list', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', 'Blockquote' ] },
        { name: 'styles', items: [  'Format' ] },
        { name: 'colors', items: [ 'TextColor', 'BGColor' ] },  // Renk butonları burada
        { name: 'document', groups: [ 'mode' ], items: [ 'Source' ] },
        { name: 'tools', items: [ 'Maximize' ] }
    ];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h2;h3;h4;h5;h6';
	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';

};
