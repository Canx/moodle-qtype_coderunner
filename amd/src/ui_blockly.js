define(['jquery', 'qtype_coderunner/blockly/browser'], function($, Blockly) {
/* 1. A constructor SomeUiName(textareaId, width, height, params) that
 *    builds an HTML component of the given width and height. textareaId is the
 *    ID of the textArea from which the UI element should obtain its initial
 *    serialisation and to which it should write the serialisation when its save
 *    or destroy methods are called. params is a JavaScript object,
 *    decoded from the JSON templateParams defined by the question plus any
 *    additional data required, such as the 'lang' in the case of Ace.
 */
        function BlocklyUi(textareaId, width, height, templateParams) {

            this.textArea = document.getElementById(textareaId);
            this.templateParams = templateParams;

            console.log("Altura: " + height);
            console.log("Anchura: " + width);


            var xml;
            //xml = "<xml id='toolbox' style='display: none'>";
            //xml += "<block type='controls_if'></block>";
            //xml += "<block type='controls_repeat_ext'></block>";
            //xml += "<block type='logic_compare'></block>";
            //xml += "<block type='math_number'></block>";
            //xml += "<block type='math_arithmetic'></block>";
            //xml += "<block type='text'></block>";
            //xml += "<block type='text_print'></block>";
            //xml += "</xml>";

            xml =  "<xml id=\"toolbox\" style=\"display: none\">";
            xml += "<block type=\"controls_if\"></block>";
            xml += "<block type=\"controls_whileUntil\"></block>";
            xml += "</xml>";

            this.toolbox = Blockly.Xml.textToDom(xml);

            this.textArea.parentNode.insertBefore(this.toolbox, this.textArea);

            this.blocklyDiv = document.createElement("div");
            this.blocklyDiv.id = "blockly_" + textareaId;
            this.blocklyDiv.class = "coderunner_blockly";
            this.blocklyDiv.tabindex = 1;
            this.blocklyDiv.style.height = height;
            this.blocklyDiv.style.width = width;
            this.blocklyDiv.overflow = "auto";

            this.textArea.parentNode.insertBefore(this.blocklyDiv, this.textArea);

            this.fail = false;
            this.workspace = null;
            try {
                this.workspace = Blockly.inject(this.blocklyDiv);
                Blockly.Xml.domToWorkspace(this.toolbox, this.workspace);
                this.textArea.parentNode.removeChild(this.blocklyDiv);
            }
            catch(err) {
                this.fail = true;
                console.log(err);
            }
        }

/* 2. A getElement() method that returns the HTML element that the
 *    InterfaceWrapper is to insert into the document tree.
 */
        BlocklyUi.prototype.getElement = function() {
            return this.blocklyDiv;
        };

/* 3. A method failed() that should return true unless the constructor
 *    failed (e.g. because it was not able to de-serialise the text area's
 *    contents). The wrapper will call destroy() on the object if failed()
 *    returns true and abort the use of the UI element. The text area will
 *    have the uiloadfailed class added, which CSS will display in some
 *    error mode (e.g. a red border).
 */
        BlocklyUi.prototype.failed = function() {
            return this.fail;
        };

/* 4. A method failMessage() that will be called only when failed() returns
 *    True. It should be a defined CodeRunner language string key.
 */
        BlocklyUi.prototype.failMessage = function() {

        };

/* 5. A sync() method that copies the serialised represention of the UI plugin's
 *    data to the related TextArea. This is used when submit is clicked.
 */
        BlocklyUi.prototype.sync = function() {
            // TODO: generate code in textArea
        };

/* 6. A destroy() method that should sync the contents to the text area then
 *    destroy any HTML elements or other created content. This method is called
 *    when CTRL-ALT-M is typed by the user to turn off all UI plugins
 */
        BlocklyUi.prototype.destroy = function() {
            // TODO
        };

/* 7. A resize(width, height) method that should resize the entire UI element
 *    to the given dimensions.
 */
        //BlocklyUi.prototype.resize = function(w, h) {
        BlocklyUi.prototype.resize = function() {
            //Blockly.svgResize(this.workspace);
        };

/* 8. A hasFocus() method that returns true if the UI element has focus.
 */
        BlocklyUi.prototype.hasFocus = function() {

        };

/* The return value from the module define is a record with a single field
 * 'Constructor' that references the constructor (e.g. Graph, AceWrapper etc)
 */
       return {
            Constructor: BlocklyUi
        };

});
