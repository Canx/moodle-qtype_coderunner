// TODO: como metemos esto en código, no en página web???? Comprobar que funciona la prueba de importación...

//<script src="../../../blockly_compressed.js"></script>
//<script src="../../../blocks_compressed.js"></script>
//<script src="../../../python_compressed.js"></script>
//<script src="../../../msg/js/en.js"></script>

// TODO: Comprobar que funciona la prueba de importación...
define(['jquery',
        'qtype_coderunner/blockly/blockly_compressed',
        'qtype_coderunner/blockly/blocks_compressed',
        'qtype_coderunner/blockly/python_compressed'], function($) {

/* 1. A constructor SomeUiName(textareaId, width, height, params) that
 *    builds an HTML component of the given width and height. textareaId is the
 *    ID of the textArea from which the UI element should obtain its initial
 *    serialisation and to which it should write the serialisation when its save
 *    or destroy methods are called. params is a JavaScript object,
 *    decoded from the JSON templateParams defined by the question plus any
 *    additional data required, such as the 'lang' in the case of Ace.
 */
        function BlocklyUi(textareaId, width, height, templateParams) {
            var textArea = $(document.getElementById(textAreaId));
            console.log("Entrando en BlockUi!!");
            textArea.placeHolder = "Esto es una prueba";

            //var blocklyWorkspace = Blockly.inject(textArea, );


                        //Blockly.Xml.domToWorkspace("TODO: definir aquí XML de entorno!", blocklyWorkspace);
        }

///* 2. A getElement() method that returns the HTML element that the
// *    InterfaceWrapper is to insert into the document tree.
// */      
//        BlocklyUi.prototype.getElement = function() {
//
//        };
//
///* 3. A method failed() that should return true unless the constructor
// *    failed (e.g. because it was not able to de-serialise the text area's
// *    contents). The wrapper will call destroy() on the object if failed()
// *    returns true and abort the use of the UI element. The text area will
// *    have the uiloadfailed class added, which CSS will display in some
// *    error mode (e.g. a red border).
// */  
//        BlocklyUi.prototype.failed = function() {
//
//        };
//
///* 4. A method failMessage() that will be called only when failed() returns
// *    True. It should be a defined CodeRunner language string key.
// */       
//        BlocklyUi.prototype.failMessage = function() {
//        
//        };
//        
///* 5. A sync() method that copies the serialised represention of the UI plugin's
// *    data to the related TextArea. This is used when submit is clicked.
// */
//        BlocklyUi.prototype.sync = function() {
//        
//        };
//
///* 6. A destroy() method that should sync the contents to the text area then
// *    destroy any HTML elements or other created content. This method is called
// *    when CTRL-ALT-M is typed by the user to turn off all UI plugins
// */
//        BlocklyUi.prototype.destroy = function() {
//        
//        };
//
///* 7. A resize(width, height) method that should resize the entire UI element
// *    to the given dimensions.
// */
//        BlocklyUi.prototype.resize = function() {
//        
//        };
//        
///* 8. A hasFocus() method that returns true if the UI element has focus.
// */
//        BlocklyUi.prototype.hasFocus = function() {
//        
//        };
//
///* The return value from the module define is a record with a single field
// * 'Constructor' that references the constructor (e.g. Graph, AceWrapper etc)
// */       
//        return {
//            Constructor: BlocklyUi
//        };

});
