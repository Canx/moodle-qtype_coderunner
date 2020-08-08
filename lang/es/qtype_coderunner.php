<?php
// This file is part of CodeRunner - http://coderunner.org.nz/
//
// CodeRunner is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// CodeRunner is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with CodeRunner.  If not, see <http://www.gnu.org/licenses/>.
/**
 * Strings for component 'qtype_coderunner', language 'es', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_coderunner
 * @copyright Ruben Cancho 2020
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
$string['aborted'] = 'La prueba fue abortada debido a un error.';
$string['ace_ui_notready'] = 'El editor Ace no está listo. Prueba a recargar la página!';
$string['addingcoderunner'] = 'Agregar una nueva pregunta de CodeRunner';
$string['ajax_error'] = '*** ERROR AJAX. ¡NO GUARDE ESTO! *** ';
$string['allok'] = '¡Pasó todas las pruebas! ';
$string['allornone'] = 'El código de prueba se debe proporcionar para todos los casos de prueba o para ninguno.';
$string['allornothing'] = 'Calificación de todo o nada';
$string['allornothing_help'] = 'Si \'Todo-o-nada\' está seleccionado, todos los casos de prueba deben cumplirse para que el envío obtenga alguna calificación. De lo contrario, la calificación se obtiene sumando las calificaciones de todos los casos de prueba que pasan y expresando esto como una fracción de la calificación máxima posible.
 
Las puntuaciones por caso de prueba solo se pueden especificar si la casilla de verificación todo o nada no está seleccionada.
 
Si utiliza un calificador de plantillas que otorga puntuaciones parciales a los casos de prueba, \'Todo o nada\' generalmente no debe estar seleccionado. ';
$string['allowattachments'] = 'Permitir adjuntos';
$string['allowattachments_help'] = 'Si se permite a los estudiantes agregar archivos adjuntos a sus envíos y, de ser así, cuántos. Los archivos adjuntos se copian en el directorio de trabajo de tiempo de ejecución y se proporciona una lista separada por comas de los nombres de los archivos adjuntos a la plantilla en la variable Twig {{ATTACHMENTS}}. Advertencia: permitir archivos adjuntos podría tener implicaciones de rendimiento o espacio en disco para los servidores Moodle y Jobe con clases grandes y / o archivos adjuntos grandes. El servidor Moodle y los servidores Jobe anteriores a febrero de 2019 almacenan todos los archivos adjuntos indefinidamente. ';
$string['allowedfilenames'] = 'Nombres de archivo permitidos';
$string['allowedfilenamesregex'] = 'Nombres de archivo permitidos (expresión regular)';
$string['allowedfilenames_help'] = 'Todos los nombres de archivos cargados deben coincidir con la expresión regular dada de PHP (Perl), si no está vacía. Por ejemplo, use \'. + \\\\. Cpp \' para permitir cualquier archivo C ++ o \'(?! Prog) \\\\. Java \' para permitir cualquier archivo Java excepto \'Prog.java \' . Además, los nombres de archivo deben contener solo caracteres alfanuméricos más guión bajo, guión y punto, no deben comenzar con guión bajo doble (\'\ _ \ _ \') y no deben entrar en conflicto con ninguno de los nombres de archivo de soporte. La Descripción es un mensaje de texto que se muestra al alumno para explicar qué archivo (s) se esperan. Deje en blanco para mostrar la expresión regular en sí. Deje ambos vacíos para omitir la comprobación de expresiones regulares. ';
$string['allowmultiplestdins'] = 'Permitir múltiples stdins';
$string['answer'] = 'Ejemplo de respuesta';
$string['answerprompt'] = 'Respuesta:';
$string['answer_help'] = 'Aquí se puede ingresar una respuesta de muestra y el autor de la pregunta puede verificarla y, opcionalmente, mostrarla a los estudiantes durante la revisión. También es utilizado por el script de prueba masivo. La corrección de una respuesta no vacía se verifica al guardar a menos que \'Validar al guardar \' esté desmarcado ';
$string['answerrequired'] = 'Proporcione una respuesta no vacía';
$string['answertooshort'] = 'Respuesta demasiado corta. Debe tener al menos {$a} caracteres. ';
$string['atleastonetest'] = 'Debe proporcionar al menos un caso de prueba para esta pregunta.';
$string['ace-language'] = 'As idioma';
$string['advanced_customisation'] = 'Personalización avanzada';
$string['answer'] = 'Respuesta';
$string['answerbox_group'] = 'Cuadro de respuesta';
$string['answerboxlines'] = 'Filas';
$string['answerbox_group_help'] = 'Establecer el número de filas para asignar al cuadro de respuesta. Esto establece la altura mínima del elemento de la interfaz de usuario (por ejemplo, Ace) que controla el cuadro de respuesta. El ancho se establece para adaptarse a la ventana. Si la respuesta desborda el cuadro vertical u horizontalmente, aparecerán barras de desplazamiento. ';
$string['answerpreload'] = 'Precarga del cuadro de respuesta';
$string['answerpreload_help'] = 'El texto suministrado aquí se cargará previamente en el cuadro de respuesta del alumno.';
$string['asolutionis'] = 'Solución del autor de la pregunta:';
$string['attachoptions'] = 'Opciones de archivos adjuntos';
$string['attachmentsoptional'] = 'Los archivos adjuntos son opcionales';
$string['attachmentsrequired'] = 'Requerir adjuntos';
$string['attachmentsrequired_help'] = 'Esta opción especifica el número mínimo de archivos adjuntos necesarios para calificar una respuesta.';
$string['autotagbycategorytitle'] = 'CodeRunner etiqueta automática por categoría';
$string['autotagbycategoryindextitle'] = 'CodeRunner question autotagger';
$string['badacelangstring'] = 'Cadena de lenguaje Ace incorrecta';
$string['badcputime'] = 'El límite de tiempo de la CPU debe dejarse en blanco o debe ser un número entero mayor que cero';
$string['bad_dotdotdot'] = 'Mal uso de \' ... \'. Debe estar al final, después de dos penalizaciones numéricas crecientes ';
$string['bademptyprecheck'] = 'La verificación previa falló con el siguiente resultado inesperado';
$string['bad_empty_splitter'] = 'El divisor de prueba no puede estar vacío cuando se usa una plantilla de combinador';
$string['badfilenamesregex'] = 'Expresión regular no válida';
$string['badfiles'] = 'Nombre (s) de archivo no permitido: {$a}';
$string['badjsonfunc'] = 'Función incrustada JSON desconocida ({$a-> func})';
$string['badjson'] = 'Resultado JSON incorrecto del resultado del calificador combinador. La salida fue: {$a-> salida} ';
$string['badmemlimit'] = 'El límite de memoria debe dejarse en blanco o debe ser un número entero no negativo';
$string['bad_new_prototype_name'] = 'Nombre ilegal para nuevo prototipo: ya en uso';
$string['badpenalties'] = 'El régimen de penalización debe ser una lista de números separados por comas en el rango [0, 100]';
$string['badquestion'] = 'Error en cuestión';
$string['badrandomintarg'] = 'Argumento incorrecto para la función JSON @randomint';
$string['badrandompickarg'] = 'Argumento incorrecto para la función JSON @randompic';
$string['badsandboxparams'] = '\' Otro \'campo (parámetros de sandbox) debe estar en blanco o un registro JSON válido';
$string['badtemplateparams'] = 'Los parámetros de la plantilla deben estar en blanco o ser un registro JSON válido';
$string['badtemplateparamsaftertwig'] = 'La combinación de parámetros de plantilla produjo un JSON no válido: <pre> {$a} </pre>';
$string['brokencombinator'] = 'Resultados esperados de la prueba {$a-> numtests}, obtuvo {$a-> numresults}. ¿Tal vez salida excesiva o error en cuestión? ';
$string['brokentemplategrader'] = 'Resultado incorrecto del calificador: {$a-> output}. La ejecución de su programa puede haber abortado (por ejemplo, se agotó el tiempo de espera o se excedió el límite de memoria).';
$string['bulkquestiontester'] = 'El <a href=\"{$a-> link}\"> script de prueba masiva </a> prueba que las respuestas de muestra para todas las preguntas en el contexto actual están marcadas correctamente. Útil solo una vez que se han agregado algunas preguntas con ejemplos de respuestas; la instalación inicial no tiene ninguno. ';
$string['bulktestallincontext'] = 'Probar todo';
$string['bulktestcontinuefromhere'] = 'Ejecutar nuevamente o reanudar, comenzando desde aquí';
$string['bulktestindextitle'] = 'Prueba masiva de CodeRunner';
$string['bulktestrun'] = 'Ejecutar todas las pruebas de preguntas para todas las preguntas en el sistema (lento, solo administrador)';
$string['bulktesttitle'] = 'Prueba de preguntas en {$a}';
$string['coderunnercategories'] = 'Categorías con preguntas de CodeRunner';
$string['coderunnercontexts'] = 'Contextos con preguntas de CodeRunner';
$string['coderunner'] = 'Código de programa';
$string['coderunner_install_testsuite_title'] = 'Un conjunto de pruebas para respuestas de muestra de CodeRunner';
$string['coderunner_install_testsuite_title_desc'] = 'El <a href="{$a-> link} "> script de prueba de respuesta de muestra </a> verifica que las preguntas con respuestas de muestra funcionan correctamente.';
$string['coderunner_install_testsuite_intro'] = 'Esta página le permite probar que las preguntas de CodeRunner con ejemplos de respuestas funcionan correctamente';
$string['coderunner_install_testsuite_failures'] = 'Pruebas que fallaron';
$string['coderunner_install_testsuite_noanswer'] = 'Preguntas sin respuestas de muestra';
$string['coderunner_help'] = 'En respuesta a una pregunta, que es una especificación para un fragmento de programa, función o programa completo, el encuestado ingresa el código fuente en un lenguaje de computadora específico que satisfaga la especificación.';
$string['coderunner_link'] = 'pregunta / tipo / coderunner';
$string['coderunner_question_type'] = 'Tipo de pregunta de CodeRunner:';
$string['coderunnersettings'] = 'Configuración de CodeRunner';
$string['coderunnersummary'] = 'La respuesta es un código de programa que se ejecuta en el contexto de un conjunto de casos de prueba para determinar su corrección.';
$string['coderunnertype'] = 'Tipo de pregunta';
$string['coderunnertype_help'] = 'Seleccione el lenguaje de programación y el tipo de pregunta. Una vez que se ha seleccionado un tipo, los detalles se pueden ver en el panel de detalles del tipo de pregunta a continuación. ';
$string['columncontrols'] = 'Tabla de resultados';
$string['columncontrols_help'] = 'Las casillas de verificación seleccionan qué columnas de la tabla de resultados deben mostrarse al alumno después del envío';
$string['confirm_proceed'] = 'Si guarda esta pregunta con \' Personalizar \'sin marcar, cualquier personalización realizada se perderá. ¿Continuar?';
$string['confirmreset'] = '¿Descarta todo su trabajo en esta pregunta y restablece el cuadro de respuesta al valor precargado original?';
$string['cputime'] = 'TimeLimit (segundos)';
$string['customisationcontrols'] = 'Personalización';
$string['customise'] = 'Personalizar';
$string['customisation'] = 'Personalización';
$string['datafiles'] = 'Archivos de soporte';
$string['datafiles_help'] = 'Cualquier archivo cargado aquí se agregará al directorio de trabajo cuando se ejecute el programa de plantilla expandida. Esto permite agregar datos de gran tamaño o archivos de soporte de manera conveniente. ';
$string['default_penalty_regime'] = 'Régimen de penalización predeterminado';
$string['default_penalty_regime_desc'] = 'El régimen de penalización predeterminado para aplicar a nuevas preguntas, que consiste en una lista separada por comas de porcentajes de penalización, que opcionalmente termina en ", ..." para indicar una progresión aritmética en curso.';
 
$string['display'] = 'Pantalla';
$string['downloadquizattempts'] = 'Descargar intentos de prueba';
$string['downloadquizattemptshelp'] = 'Haga clic en el curso correspondiente y / o el botón de descarga
        para el curso y cuestionario que desea descargar. Números entre paréntesis
        después de los cursos son el número de pruebas en el curso con al menos
        Una presentación. Los números entre paréntesis después del nombre del examen
        son los números de envíos. ';
$string['editingcoderunner'] = 'Edición de una pregunta de CodeRunner';
$string['empty_new_prototype_name'] = 'El nuevo nombre del tipo de pregunta no puede estar vacío';
$string['emptypenaltyregime'] = 'Se debe definir el régimen de penalización (desde la versión 3.1)';
$string['enable'] = 'Habilitar';
$string['enablecombinator'] = 'Habilitar combinador';
$string['enable_diff_check'] = 'Activar \' Mostrar diferencias \'botón';
$string['enable_diff_check_desc'] = 'Presente a los estudiantes con un botón \' Mostrar diferencias \'si su respuesta es incorrecta y se está utilizando un validador de coincidencia exacta';
$string['enable_sandbox_desc'] = 'Permitir el uso del sandbox especificado para ejecutar envíos de estudiantes';
$string['equalgrader'] = 'Coincidencia exacta';
$string['error_loading_prototype'] = 'Error al cargar el prototipo. ¿Problemas de red o servidor caído, tal vez? ';
$string['errorstring-ok'] = 'OK';
$string['errorstring-autherror'] = 'No autorizado para usar sandbox';
$string['errorstring-jobe400'] = 'Error del servidor de sandbox de Jobe:';
$string['errorstring-overload'] = 'No se pudo ejecutar el trabajo debido a una sobrecarga del servidor. ¿Quizás intentarlo de nuevo en breve? ';
$string['errorstring-pastenotfound'] = 'Solicitud de estado de trabajo inexistente';
$string['errorstring-wronglangid'] = 'Se solicitó un lenguaje inexistente';
$string['errorstring-accessdenied'] = 'Acceso al sandbox denegado';
$string['errorstring-submitlimitexceeded'] = 'Se alcanzó el límite de envío de sandbox';
$string['errorstring-submitfailed'] = 'Falló el envío al sandbox';
$string['errorstring-unknown'] = 'Error inesperado al ejecutar su código. El servidor de sandbox puede estar caído o sobrecargado. ¿Quizás intentarlo de nuevo en breve? ';
$string['expand'] = 'Expandir';
$string['expandtitle'] = 'Mostrar categorías de preguntas';
$string['expected'] ='Salida esperada';
$string['expectedcolhdr'] ='Esperado';
$string['expected_help'] ='El resultado esperado de la prueba. Visto por la plantilla como {{TEST.expected}}.';
$string['exportthisquestion'] = 'Exportar esta pregunta';
$string['exportthisquestion_help'] = 'Esto creará un archivo de exportación XML de Moodle que contiene solo esta pregunta. Un ejemplo de cuándo esto es útil si cree que esta pregunta demuestra un error en CodeRunner que le gustaría informar a los desarrolladores. ';
$string['extra'] = 'Datos de plantilla adicionales';
$string['extra_help'] = 'Un campo de texto adicional a veces útil para uso de la plantilla, al que se accede como {{TEST.extra}}';
$string['fail'] = 'Fail';
$string['fail'] = 'fallas';
$string['failurehidden'] = 'Su código falló una o más pruebas ocultas';
$string['failurentests'] = 'Falló {$a-> numerrors} prueba (s)';
$string['failuretesting'] = 'Prueba fallida';
$string['feedback'] = 'Comentarios';
$string['feedback_quiz'] = 'Establecido por prueba';
$string['feedback_show'] = 'Mostrar fuerza';
$string['feedback_hide'] = 'Forzar ocultar';
$string['feedback_help'] = 'Elija \' Establecer por prueba \'para permitir que la configuración de comentarios de la prueba controle la visualización de la tabla de resultados, \' Forzar presentación \'para mostrar la tabla de resultados independientemente y \' Forzar ocultar \'para ocultarlo independientemente ';
$string['fileheader'] = 'Archivos de soporte';
$string['filenamesexplain'] = 'Descripción';
$string['filenamesregex'] = 'Expresión regular';
$string['filloutoneanswer'] = 'Debe ingresar el código fuente que satisfaga la especificación. El código que ingrese se ejecutará para determinar su corrección y una calificación otorgada en consecuencia. ';
$string['firstfailure'] = 'Primer caso de prueba fallido: {$a}';
$string['forexample'] = 'Por ejemplo';
$string['globalextra'] = 'Global extra';
$string['globalextra_help'] = 'Un campo de texto para uso general de autores de plantillas, como el campo adicional de cada caso de prueba, pero global para todas las pruebas. Disponible para el autor de la plantilla como {{QUESTION.globalextra}}. ';
$string['graphhelp'] = '- Haga doble clic en un espacio en blanco para crear un nuevo nodo / estado.
- Haga doble clic en un nodo existente para "marcarlo", por ejemplo, como un estado de aceptación para máquinas de estado finito
  (FSMs). Haga doble clic nuevamente para desmarcarlo.
- Haga clic y arrastre para mover un nodo.
- Alt clic (o Ctrl Alt clic) y arrastre para mover un (sub) gráfico.
- Haga clic en Shift dentro de un nodo y arrástrelo a otro para crear un enlace.
- Haga clic con la tecla Mayús en un espacio en blanco, arrástrelo a un nodo para crear un enlace de inicio (solo FSM).
- Haga clic y arrastre un enlace para alterar su curva.
- Haga clic en un enlace / nodo para editar su texto.
- Haga clic en el texto del enlace y arrastre para moverlo.
- Escribir _ seguido de un dígito hace que ese dígito sea un subíndice.
- Escribir \\ epsilon crea un carácter epsilon (y de manera similar para \\ alpha, \\ beta, etc.).
- Haga clic en un enlace / nodo y luego presione la tecla Eliminar para eliminarlo (o eliminar funciones en una Mac).
- Ctrl + z para deshacer y Ctrl + y o Ctrl + Shift + z para rehacer. ';
$string['goodemptyprecheck'] = 'Aprobado';
$string['gotcolhdr'] = 'Se obtuvo';
$string['grader'] = 'Grader';
$string['grading'] = 'Calificación';
$string['gradingcontrols'] = 'Controles de calificación';
$string['gradingcontrols_help'] = 'El calificador predeterminado de \'coincidencia exacta\'
otorga marcas solo si el resultado de la ejecución coincide exactamente con el valor esperado definido
por el caso de prueba. El espacio en blanco final se elimina de todas las líneas, y cualquier resto
las líneas en blanco se eliminan, antes de
Se realiza prueba de igualdad.
 
El calificador de casi igualdad es similar, excepto que
también contrae múltiples espacios y pestañas en un solo espacio, elimina todos los espacios en blanco
líneas y convierte las cadenas a minúsculas.
 
El calificador de \'expresión regular\' usa el \'esperado\'
campo del caso de prueba como una expresión regular y prueba la salida para ver
si se puede encontrar una coincidencia con el resultado esperado en cualquier lugar dentro de la salida.
Para forzar la coincidencia de toda la salida, inicie y finalice la expresión regular
con \'\ A \' y \'\ Z \' respectivamente. La coincidencia de expresiones regulares utiliza MULTILINE
y opciones DOTALL.
 
La opción \'template grader\' supone que la salida del programa es en realidad un resultado de calificación, es decir, que la plantilla no evalúa * y califica * la respuesta del alumno.
El único resultado de dicho programa de plantilla debe ser un registro codificado con JSON.
 
Si la plantilla es una plantilla por prueba (es decir, no un combinador), la cadena JSON debe describir una fila de
tabla de resultados y debe contener al menos un campo \'fracción \', que se multiplica por TEST.mark para decidir cómo
muchas marcas se otorga el caso de prueba. Por lo general, también debe contener un \'got \'
campo, que es el valor que se muestra en la columna \'Got \' de la tabla de resultados.
Las otras columnas de la tabla de resultados (código de prueba, stdin, esperado) también pueden
será definido por el programa de calificación de la plantilla y se usará en lugar de los valores de
El caso de prueba. Como ejemplo, si la salida del programa es la cadena
<code> {"fraccion": 0.5, "got": "¡La mitad de las respuestas fueron correctas!"} </code>, las medias marcas serían
dado para ese caso de prueba en particular y la columna \'Got \' mostraría el
texto "La mitad de las respuestas fueron correctas". Se pueden agregar otras columnas al resultado
tabla agregando atributos adicionales al registro JSON y también a la pregunta
Campo Columnas de resultados.
 
Si la plantilla es un combinador, la cadena JSON emitida por el calificador de plantillas
nuevamente debe contener un campo \'fracción \', esta vez para la marca total,
y puede contener cero o más de \'prologuehtml \', \'testresults \',
\'epiloguehtml \', \'columnformats \', \'showoutputonly \' y \'showdifferences \'.
Los campos \'prologuehtml \' y \'epiloguehtml \' son html
que se muestra respectivamente antes y después de la tabla de resultados (opcional). los
El campo \'testresults \', si se proporciona, es una lista de listas utilizadas para mostrar algún tipo
de la tabla de resultados. La primera fila es la fila de encabezado de columna y todas las demás filas
definir el cuerpo de la mesa. Existen dos valores de encabezado de columna especiales: \'iscorrect \'
y \'ishidden \'. Las columnas \'iscorrect \' se usan para mostrar ticks o
cruza por 1 o 0 valores de fila respectivamente. La columna \'ishidden \' no es \'t
en realidad se muestra, pero los valores 0 o 1 en la columna se pueden usar para encender y
visibilidad fuera de fila. Los estudiantes no ven filas ocultas sino marcadores y otros
El personal lo hace. Si se proporciona una tabla \'testresults \', una opción
El campo \'columnformats \' también se puede suministrar. Esto debería ser una lista
de cadenas, una por columna excluyendo el \'iscorrect \' y el \'ishidden \'
columnas Las cadenas especifican el formato que se utilizará para mostrar los valores de las celdas;
actualmente los únicos formatos compatibles son \'% s \' para una visualización de cadena normal
(que se desinfecta y se envuelve en un elemento \'pre \') y \'% h \' para un html
valor que no debe procesarse más antes de la visualización.
El campo \'showdifferences \' activa la visualización de un \'Show Differences \'
botón después de la tabla de resultados si la fracción de la marca otorgada no es 1.0.
El campo \'showoutputonly \', si es verdadero, se usa cuando la pregunta debe ser
solo se usa para mostrar la salida y quizás las imágenes de una ejecución, sin marca.
';
$string['graph_ui_invalidserialisation'] = 'GraphUI: serialización inválida';
$string['hidden'] = 'Oculto';
$string['hidedifferences'] = 'Ocultar diferencias';
$string['HIDE'] = 'Ocultar';
$string['HIDE_IF_FAIL'] = 'Ocultar si falla';
$string['HIDE_IF_SUCCEED'] = 'Ocultar si tiene éxito';
$string['hiderestiffail'] = 'Ocultar resto si falla';
$string['hoisttemplateparams'] = 'Parámetros de la plantilla de elevación';
$string['howtogetmore'] = 'Para obtener información más detallada, guarde la pregunta con \' Validar al guardar \'sin marcar y pruebe manualmente';
$string['iscombinatortemplate'] = 'Es combinador';
$string['ideone_user'] = 'Usuario del servidor Ideone';
$string['ideone_user_desc'] = 'El nombre de inicio de sesión que se utilizará cuando se conecte al servidor Ideone en desuso (si el sandbox de ideone está habilitado)';
$string['ideone_pass'] = 'Contraseña del servidor Ideone';
$string['ideone_pass_desc'] = 'La contraseña a usar cuando se conecta al servidor Ideone en desuso (si el sandbox de ideone está habilitado)';
$string['info_unavailable'] = 'La información del tipo de pregunta no está disponible para preguntas personalizadas.';
$string['illegalformat'] = 'Formato ilegal ({$a-> format}) en formatos de columna';
$string['inputcolhdr'] = 'Entrada';
$string['insufficientattachments'] = 'No hay suficientes archivos adjuntos, se requiere {$a}.';
$string['is_prototype'] = 'Usar como prototipo';
$string['jobe_apikey'] = 'Clave API de Jobe';
$string['jobe_apikey_desc'] = 'La clave API que se incluirá en todas las solicitudes REST al servidor Jobe (si es necesario). Max 40 caracteres. Déjelo en blanco para omitir la clave API de las solicitudes ';
$string['jobe_host'] = 'Servidor Jobe';
$string['jobe_host_desc'] = 'El nombre de host del servidor Jobe más el número de puerto si no es el puerto 80, por ejemplo, jobe.somewhere.edu:4010. La URL para la solicitud de Jobe se obtiene de manera predeterminada al anteponer esta cadena con http: // y agregar /jobe/index.php/restapi/ <REST_METHOD>. Puede especificar el protocolo https: // delante del nombre de host (por ejemplo, https://jobe.somewhere.edu) si el servidor Jobe está configurado detrás de un proxy inverso que actúa como una terminación SSL. ';
$string['jobe_warning_html'] = "<p style = 'background-color: yellow'> Ejecutar usando el servidor Jobe de la Universidad de Canterbury. Esto es solo para pruebas iniciales. Configure su propio servidor Jobe lo antes posible. Consulte <a href='https://github.com/trampgeek/moodle-qtype_coderunner/blob/master/Readme.md#sandbox-configuration' target='_blank'> aquí </a>. </p> ";
$string['jobe_canterbury_html'] = "<p style = 'color: gris; estilo de fuente: cursiva; tamaño de fuente: más pequeño'> Ejecutar en el servidor Jobe de la Universidad de Canterbury. </p>";
$string['language'] = 'Idioma sandbox';
$string['languages'] = 'Idiomas';
$string['languages_help'] = 'El idioma de la caja de arena es el lenguaje de computadora utilizado
para ejecutar la presentación.
Debe ser conocido por la caja de arena elegida (si una específica ha sido
seleccionado) o al menos a uno de los sandboxes habilitados (de lo contrario).
Por lo general, esto no debería necesitar modificarse del valor en el
plantilla principal; Ajústalo bajo tu propio riesgo.
 
El lenguaje de Ace es el idioma utilizado por el editor de código Ace (si está habilitado) para la respuesta del alumno.
Por defecto, esto es lo mismo que el idioma de sandbox; ingrese un diferente
valor aquí solo si el idioma de la plantilla es diferente del idioma
que se espera que el alumno escriba (por ejemplo, si un preprocesador de Python es
usado para validar el programa C de un estudiante antes de ejecutarlo).
 
Preguntas en varios idiomas, es decir, preguntas que los estudiantes pueden responder
más de un idioma, se habilitan configurando el lenguaje Ace en una coma separada
lista de idiomas Luego se les presenta a los estudiantes un menú desplegable para seleccionar
El idioma en el que se escribe su respuesta. Si exactamente uno de los idiomas
tiene un asterisco (\'\ * \') adjunto, ese idioma se elige como idioma predeterminado,
que se selecciona como el estado inicial del menú desplegable. Por ejemplo,
un valor en lenguaje Ace de "C, C ++, Java \ *, Python3" permitiría a los estudiantes enviar
C, C ++, Java o Python3 pero el menú desplegable inicialmente mostraría Java que
Sería el predeterminado. Si no se especifica ningún valor predeterminado, el
El estado inicial del menú desplegable está vacío y el alumno debe elegir un idioma.
Las preguntas en varios idiomas requieren una plantilla especial que utilice {{RESPUESTA \ _LANGUAGE}}
variable de plantilla para controlar cómo ejecutar el código del alumno. Ver el incorporado
ejemplo de tipo de pregunta en varios idiomas La variable {{ANSWER \ _LANGUAGE}} está definida
<i> solo </i> para preguntas en varios idiomas.
 
Si el autor desea proporcionar una respuesta de muestra a una pregunta en varios idiomas,
deben escribirlo en el idioma predeterminado, si se especifica, o el
primero de los idiomas permitidos de otra manera. ';
$string['languageselectlabel'] = 'Idioma';
$string['mark'] = 'Puntos';
$string['marking'] = 'Calificar asignación';
$string['markinggroup'] = 'Calificación';
$string['markinggroup_help'] = 'Si \'Todo o nada\' está seleccionado, todos los casos de prueba deben cumplirse para que la pregunta  obtenga alguna calificación. De lo contrario, se obtiene la calificación sumando las puntuaciones de todos los casos de prueba que pasan y expresando esto como una fracción de la puntuación máxima posible.
Las puntuaciones por caso de prueba solo se pueden especificar si la casilla de verificación \'Todo o nada\' no está seleccionada. Si usa una plantilla de calificación que otorga puntuaciones parciales a los casos de prueba \'Todo o nada\' no debe seleccionarse.
 
El régimen de penalización obligatorio es una lista de penalizaciones separadas por comas (cada una con un porcentaje)
que se aplican a las entregas sucesivamente. Son penalizaciones absolutas, no acumulativas. Como un
caso especial, la última penalización puede ser \'... \' para significar "extender la anterior
dos penalizaciones como una progresión aritmética de hasta 100 ". Por ejemplo,
<code> 0,5,10,30, ... </code> es equivalente a <code> 0,5,10,30,50,70,90,100 </code>.
Si hay más envíos que penalizaciones definidas, se utiliza el último valor.
Los espacios se pueden usar en lugar de comas como separador.
 
El administrador del sistema puede establecer el régimen de penalización predeterminado en todo el sitio mediante
Administración del sitio> Complementos> Tipos de preguntas> CodeRunner.
 
Establezca el régimen de penalización en \'0 \' para cero penalizaciones en todos los envíos. ';
$string['maxfilesize'] = 'Tamaño máximo de archivo permitido (bytes)';
$string['maxfilesize_help'] = 'Seleccione el tamaño máximo de carga de archivos (bytes). Permitir cargas de archivos grandes con clases grandes puede afectar el rendimiento y el espacio en disco en los servidores Moodle y Jobe. ';
$string['memorylimit'] = 'MemLimit (MB)';
$string['missinganswers'] = 'respuestas faltantes';
$string['missingorbadfraction'] = 'Fracción incorrecta o faltante en la salida de la salida de la clasificadora del combinador. La salida fue: {$a-> salida} ';
$string['missingoutput'] = 'Debe proporcionar el resultado esperado de este caso de prueba.';
$string['missingprototype'] = 'Esta pregunta se definió como del tipo \' {$a-> crtype} \'pero el prototipo no existe, no es único o no está disponible en este contexto. Debe cancelar e intentar (re) instalar el prototipo.
¡Proceda a editar solo si sabe lo que está haciendo! ';
$string['missingprototypes'] = 'Prototipos faltantes';
$string['missingprototypewhenrunning'] = 'Pregunta rota (falta prototipo \' {$a-> crtype} \'). No se puede ejecutar. ';
$string['multipledefaults'] = 'Como máximo se puede seleccionar un idioma como predeterminado';
$string['multipleprototypes'] = 'Se encontraron múltiples prototipos para \' {$a-> crtype} \'';
$string['mustrequirefewer'] = 'No puede requerir más archivos adjuntos de los que permite';
$string['nearequalitygrader'] = 'Coincidencia casi exacta';
$string['nodetailsavailable'] = 'Seleccione un tipo de pregunta para ver ayuda detallada.';
$string['noqtype'] = 'No se ha seleccionado ningún tipo de pregunta';
$string['morehidden'] = 'Algunos casos de prueba ocultos también fallaron';
$string['noerrorsallowed'] = 'Su código debe pasar todas las pruebas para obtener alguna calificación. Inténtalo de nuevo.';
$string['nonnumericmark'] = 'Marca no numérica';
$string['nosampleanswer'] = 'Sin respuesta de muestra';
$string['negativeorzeromark'] = 'La marca debe ser mayor que cero';
$string['options'] = 'Opciones';
$string['ordering'] = 'Ordenar';
$string['overallresult'] = 'Resultado general';
$string['passes'] = 'aprueba';
$string['penaltyregime'] = '(penalización: {$a}%)';
$string['penaltyregimelabel'] = 'Penalización:';
$string['pass'] = 'aprueba';
$string['pluginname'] = 'CodeRunner';
$string['pluginnameadding'] = 'Agregar una pregunta de CodeRunner';
$string['pluginnameediting'] = 'Editando una pregunta de CodeRunner';
$string['pluginnamesummary'] = 'CodeRunner: ejecuta el código enviado por el alumno en un sandbox';
$string['pluginname_help'] = 'Use el cuadro combinado \' Tipo de pregunta \'para seleccionar el
lenguaje informático y tipo de pregunta que se utilizará para ejecutar el envío del alumno.
Especifique el problema para el que el alumno debe escribir el código, luego defina
un conjunto de pruebas que se ejecutarán en la presentación del alumno ';
$string['pluginname_link'] = 'pregunta / tipo / coderunner';
$string['precheck'] = 'Precheck';
$string['precheck_disabled'] = 'Desactivado';
$string['precheck_empty'] = 'Vacío';
$string['precheck_examples'] = 'Ejemplos';
$string['precheck_selected'] = 'Seleccionado';
$string['precheck_all'] = 'Todos';
$string['precheck_help'] = 'Si Precheck está habilitado, los estudiantes tendrán un botón adicional a la izquierda del
botón de verificación habitual para darles una carrera sin penalización para verificar su código
un subconjunto de los casos de prueba de preguntas.
 
Si se selecciona \'Vacío \', una sola ejecución
se realizará con la plantilla por prueba utilizando un caso de prueba en el que todos los
Los campos (código de prueba, stdin, esperado, etc.) son la cadena vacía. Salida no vacía
se considera una falla previa a la verificación. Usar con precaución:
algunos tipos de preguntas no manejarán esto correctamente, por ejemplo, preguntas de escribir un programa
que generan salida
 
Si se selecciona \'Ejemplos \', el código
se probará contra todas las pruebas para las cuales se ha verificado \'use_as_example \'.
 
Si se selecciona \'Seleccionado \', se agrega un elemento de IU adicional a cada caso de prueba
para permitir al autor seleccionar un subconjunto específico de las pruebas.
 
Si se selecciona \'Todos \', se ejecutan todos los casos de prueba (aunque su comportamiento podría
ser diferente de la comprobación normal, si el código de la plantilla así lo elige).
 
La plantilla puede verificar si la ejecución es o no una comprobación previa utilizando el
Parámetro de ramita {{IS_PRECHECK}}, que es "1" durante las ejecuciones de verificación previa y
"0" de lo contrario. ';
$string['precheck_only'] = 'Precheck only';
$string['precheckingemptyset'] = 'Ejemplos de verificación previa, ¡pero no hay ninguno!';
$string['privacy: metadata'] = 'El complemento de tipo de pregunta CodeRunner no almacena ningún dato personal.';
$string['Proce_at_own_risk'] = '¡¿Editando un prototipo de pregunta incorporado ?! ¡Proceda bajo su propio riesgo! ';
$string['prototypecontrols'] = 'Creación de prototipos';
$string['prototypeusage'] = 'Uso del prototipo de la pregunta CodeRunner para el curso {$a}';
$string['prototypeusageindex'] = 'Cursos disponibles';
$string['prototypecontrols_help'] = 'Si \' Is prototype \'es verdadero, esta pregunta se convierte en un prototipo para otras preguntas.
Después de guardar, el nombre del tipo de pregunta especificado aparecerá en la lista desplegable
de tipos de preguntas. Las nuevas preguntas basadas en este tipo heredarán por defecto
Todos los atributos de personalización especificados para esta pregunta. Cambios posteriores
a esta pregunta afectará a todas las preguntas derivadas a menos que sean
ellos mismos personalizados, lo que rompe la conexión.
 
La herencia prototípica es solo nivel único, por lo que esta pregunta, cuando se guarda como un prototipo, pierde su
conexión a su tipo base original, convirtiéndose en un nuevo tipo base por derecho propio.
Tenga en cuenta que al exportar preguntas derivadas debe asegurarse de que esto la pregunta también se incluye en la exportación, o la pregunta derivada será una huérfano cuando se importa a otro sistema. Además, usted es responsable de mantener realizar un seguimiento de las preguntas que está utilizando como prototipos; es muy recomendable que cambie el nombre de la pregunta a algo como \'PROTOTYPE_for_my_new_question_type\' para facilitar el mantenimiento posterior.';
$string['prototype_error'] = '*** FALLO DE CARGA DEL PROTOTIPO. ¡NO GUARDE ESTO! *** ';
$string['prototype_load_failure'] = 'Error al cargar el prototipo:';
$string['prototypeQ'] = '¿Es el prototipo?';
$string['qtype_c_function'] = '<p> Un tipo de pregunta para preguntas de escritura de una función en C.
Se espera que la respuesta del alumno sea una función C completa, pero opcionalmente puede
ir precedido de otro código C autónomo, como las directivas de preprocesador y funciones de soporte. </p>
<p> El código de prueba para tales preguntas generalmente llama a la función del estudiante con
algunos argumentos de prueba e imprime el resultado, como
<pre> printf ("% d \ n", someIntFunction (blah1, blah2)) </pre>
El campo <i> Esperado </i> del caso de prueba es el resultado esperado de la prueba. </p>
<p>
Si no se proporciona una entrada estándar para ninguno de los casos de prueba, se
El programa de prueba está construido, que consiste en: </p>
<ol>
<li> El siguiente estándar # incluye: stdlib.h, ctype.h, string.h, stdbool.h, math.h </li>
<li> La respuesta del alumno. </li>
<li> Una secuencia de bloques envueltos en llaves para cada uno de los casos de prueba dados.
Cada bloque contiene solo el código de prueba del caso de prueba. También hay un <i> printf </i>
declaración agregada entre bloques de código para imprimir un separador especial que se utiliza
para dividir la salida en salidas de casos de prueba individuales. </li>
</ol>
<p> Sin embargo, si alguno de los casos de prueba tiene una entrada estándar no vacía, prueba múltiple
se ejecutan programas, uno para cada caso de prueba.
</p> <p> Se ignora el campo <i> extra </i> del caso de prueba. </p> ';
$string['qtype_cpp_function'] = '<p> Un tipo de pregunta para preguntas de escribir una función en C ++.
Se espera que la respuesta del alumno sea una función completa de C ++, pero opcionalmente puede
ir precedido de otro código autónomo de C ++, como las directivas de preprocesador y
funciones de soporte. </p>
<p> En cada caso de prueba, el código de prueba para tales preguntas generalmente llama a la función del estudiante con
algunos argumentos de prueba e imprime el resultado, como
<pre> cout << someIntFunction (blah1, blah2)) </pre>
El campo <i> Esperado </i> del caso de prueba es el resultado esperado de la prueba.
<p>
Si no se proporciona una entrada estándar para ninguno de los casos de prueba, se
El programa de prueba está construido, que consiste en: </p>
<ol>
<li> El siguiente estándar # incluye: iostream, fstream, string, math, vector y algoritmo </li>
<li> <code> usando el espacio de nombres estándar; </code> </li>
<li> La respuesta del estudiante </li>
<li> Una secuencia de bloques envueltos en llaves para cada uno de los casos de prueba dados.
Cada bloque consta del campo <i> extra </i> del caso de prueba (generalmente vacío)
seguido por el código de prueba. También hay un <i> printf </i>
declaración agregada entre bloques de código para imprimir un separador especial que se utiliza
para dividir la salida en salidas de casos de prueba individuales. </li>
</ol>
<p> Sin embargo, si alguno de los casos de prueba tiene una entrada estándar no vacía, prueba múltiple
se ejecutan programas, uno para cada caso de prueba.
</p> ';
$string['qtype_c_program'] = '<p> Se usa para preguntas de escribir un programa en C, donde
no hay un código por caso de prueba, y las diferentes pruebas solo usan diferentes
datos de entrada estándar (stdin). Se espera que la respuesta del estudiante sea completa
programa ejecutable, que se ejecuta tal cual, sin modificación por CodeRunner,
una vez para cada caso de prueba. Los valores del código de prueba y los campos adicionales de cada
se ignoran los casos de prueba. </p> <p> Si necesita establecer una compilación o enlace especial
argumentos para la pregunta, puede personalizarla (haga clic en Personalizar
casilla de verificación), abra la sección <i> Personalización avanzada </i> e ingrese
valores en el <i> Sandbox & gt; Parámetros </i>. Por ejemplo <pre>
{"linkargs": ["- lm"]} </pre> para enlazar con la biblioteca matemática. ';
$string['qtype_cpp_program'] = '<p> Se usa para preguntas de C ++ write-a-program, donde
no hay un código por caso de prueba, y las diferentes pruebas solo usan diferentes
datos de entrada estándar (stdin). Se espera que la respuesta del estudiante sea completa
programa ejecutable, que se ejecuta tal cual, sin modificación por CodeRunner,
una vez para cada caso de prueba. Los valores del código de prueba y los campos adicionales de cada
el caso de prueba se ignora. </p> ';
$string['qtype_directed_graph'] = '<p> Un tipo de pregunta de python3 que le pide al alumno que dibuje
Un gráfico dirigido para satisfacer algunas especificaciones. El autor de la pregunta tiene que escribir
Código de Python3 para verificar el gráfico resultante. </p> <p> Tenga en cuenta que en realidad no es
necesario utilizar este tipo de pregunta para gráficos dirigidos, como la funcionalidad
se proporciona principalmente por el complemento GraphUI. Si el procesamiento previo del gráfico se realizó
con este tipo de pregunta no se ajusta a sus necesidades, puede usar un
Pregunta de Python3 (o cualquier otro idioma), configure la interfaz de usuario en GraphUI y analice
la versión serializada en JSON del gráfico (la variable Twig STUDENT_ANSWER & nbsp;)
usted mismo. Sin embargo, este tipo de pregunta proporciona un ejemplo de cómo usar el
Complemento GraphUI. Haga clic en <i> Personalizar </i> & nbsp; para ver el código de la plantilla. </p>
<p> La especificación le pedirá al alumno que dibuje un gráfico dirigido para satisfacer
ciertos requisitos Podría ser, por ejemplo, un DFA (estado finito determinista
autómata) o una máquina de torneado. El código del caso de prueba y / o el código adicional
luego analice el gráfico e imprima un mensaje para el alumno, como OK si
el gráfico es correcto o un mensaje de error informativo adecuado de lo contrario. </p>
<p> La plantilla para esta pregunta analiza el gráfico serializado JSON, extrayendo
su topología en forma de un diccionario de adyacencia & nbsp; <i> gráfico </i>. Esta
variable está disponible para la prueba o código adicional en el caso de prueba. Claves en el
diccionario son nombres de nodo, si se proporcionan, o etiquetas de identificación de nodo arbitrarias de
el formulario # 1, # 2, etc. de lo contrario. Los valores en el diccionario son listas de salientes
bordes, ordenados por nombre de nodo vecino o identificador, cada borde es una tupla
(neighbourId, edgeLabel). </p> <p> Cada entrada en la lista de adyacencia tiene la forma
(nodeNameOrId, vecinos) donde vecinos es una lista de tuplas
(vecinoNodeNameOrId, edgeLabel). Si los nodos reciben nombres, se usan
como identificadores de nodo, de lo contrario se utilizan los nombres # 1, # 2, etc. La adyacencia
La lista y la lista de vecinos se ordenan por nombre de nodo o identificador. </p>
<p> La plantilla es combinatoria: el <i> testcode </i> & nbsp; y
<i> extra </i> & nbsp; el código se ejecuta para cada caso de prueba. </p> <p> Como un simple
ejemplo, si la especificación fuera simplemente "Dibuje un gráfico dirigido con dos nodos
etiquetado A y B, con un borde de A a B ", un caso de prueba adecuado (aunque con
salida de error inútil) podría ser: </p> <pre>
if set (graph.keys ()) == {\'A \', \'B \'} y len (graph [\'A \']) == 1 y len (graph [\'B \'] ) == 0 y gráfico [\'A \'] [0] [0] == \'B \':
    imprimir (\'OK \')
más:
    imprimir (\'No \')
</pre>
<p> Alternativamente, podría haber un conjunto de casos de prueba, cada uno verificando
Uno de los aspectos de la especificación. Por ejemplo, el primer caso de prueba podría
imprima las teclas ordenadas, esperando ver \'A \', \'B \'. El segundo caso de prueba podría
imprima los bordes salientes desde el nodo \'A \', y así sucesivamente. </p>
<p> La pregunta toma los siguientes parámetros de plantilla, todos los cuales son reconocidos
mediante el complemento GraphUI y controlar su comportamiento. </p>
<p> <ul>
<li> isfsm. Verdadero si el gráfico es de una máquina de estados finitos. Si es cierto, el gráfico
puede contener un borde entrante de la nada (el borde inicial) y los nodos pueden ser
marcado como estados de aceptación (se muestra con un círculo doble) haciendo doble clic. Valor predeterminado: verdadero. </li>
<li> está dirigido. Verdadero si los bordes están dirigidos. Valor predeterminado: verdadero. </li>
<li> noderadius. El radio de un nodo, en píxeles. Valor predeterminado: 26. </li>
<li> tamaño de fuente. El tamaño de fuente utilizado para las etiquetas de nodo y borde. Valor predeterminado: 20 puntos. </li>
<li> desplazamiento de texto. Un desplazamiento en píxeles utilizado al colocar el texto de la etiqueta del enlace. Obsoleto
como texto de enlace ahora se puede arrastrar manualmente. Predeterminado 5. </li>
<li> helpmenutext. Una cadena que se utilizará en lugar de la información de ayuda predeterminada, si se proporciona.
Sin valor predeterminado. </li>
<li> locknodepositions. Verdadero para evitar que el usuario mueva nodos. Útil cuando el
el cuadro de respuesta está precargado con un gráfico que el alumno debe anotar
cambiando etiquetas de nodo o borde o agregando / eliminando bordes. Nota, aunque eso
los nodos todavía se pueden agregar y eliminar (pero vea locknodeset). </li>
<li> etiquetas de bloqueo. True para evitar que el usuario edite etiquetas de nodo (incluyendo
de nodos recién agregados). Esto también evitará que los nuevos nodos tengan etiquetas no vacías.
Valor predeterminado: falso. </li>
<li> locknodeset. Verdadero para evitar que el usuario agregue o elimine nodos o (para FSM)
alternar el estado de aceptación. Valor predeterminado: falso </li>
<li> posiciones de bloqueo. Es cierto para evitar que el usuario arrastre bordes para cambiar
su curvatura También asegura que
los bordes agregados por un alumno son rectos, por ejemplo, para dibujar un polígono en un conjunto de
puntos dados Nota, aunque eso
los bordes todavía se pueden agregar y eliminar (pero vea el conjunto de bloqueo). Valor predeterminado: falso. </li>
<li> lockgelabels. Verdadero para evitar que el usuario edite etiquetas de borde. Esto también
evita etiquetas no vacías en nuevos bordes. Valor predeterminado: falso. </li>
<li> conjunto de bloqueo. True para evitar que el usuario agregue bordes o elimine
bordes de, el gráfico precargado. Valor predeterminado: falso. <li>
</ul> </p> ';
$string['qtype_java_class'] = '<p> Una pregunta de Java para escribir una clase, donde el alumno envía un
clase completa como su respuesta. Cada prueba típicamente instanciará un objeto del especificado
clase y realizar una o más pruebas en él. No es un tipo de pregunta combinador, lo que significa que
cada caso de prueba se ejecuta como un programa de sandbox separado.
</p> <p> El programa generado para cada caso de prueba consiste en la respuesta del estudiante, con
el atributo <i> público </i> & nbsp; eliminado si está presente. Eso (ahora local)
la definición de clase es seguida por una <i> __Tester __ & nbsp; </i> & nbsp; pública que
tiene un método <i> principal </i> & nbsp; que instancia la clase Tester y llama a su
<i> runTests </i> & nbsp; método. El método <i> runTests </i> & nbsp; simplemente contiene el
código de caso de prueba Consulte la plantilla para obtener una aclaración. </p> <p> Cabe señalar que
El algoritmo utilizado para quitar el atributo público de la clase proporcionada por el alumno
es simplista solo funciona si las palabras <i> clase pública </i> & nbsp; existen exactamente
una vez en el código del alumno, separados por un solo espacio. </p>
<p> El campo adicional del caso de prueba se ignora. </p>
<p> Este tipo de pregunta es ineficiente si hay muchas pruebas, como una prueba separada
El trabajo de compilación y ejecución se envía al sandbox para cada caso de prueba. Esto podría ser
resuelto escribiendo un tipo de pregunta de estilo combinador. Ver el coderunner
documentación (coderunner.org.nz) para más información. </p> ';
$string['qtype_java_method'] = '<p> Se utiliza para preguntas de escritura de un método Java donde
Se le pide al estudiante que escriba un método que sea esencialmente una función independiente.
La prueba proporcionada por el autor suele ser solo una o dos líneas de código que
(aparentemente) simplemente llame al método proporcionado por el estudiante, como en C. Debajo del capó, el
la plantilla construye una clase Main que contiene el método proporcionado por el alumno
(y cualquier otro método de soporte, si eligen escribirlos) más un \'runTests \'
método que envuelve los casos de prueba. La función principal para la clase construye un
instancia de Main y llama a su método runTests. Vea el código de la plantilla para más detalles. </p> ';
$string['qtype_java_program'] = '<p> Una pregunta de Java para escribir un programa donde el alumno
envía un programa completo como respuesta. El programa se compila y ejecuta para cada
caso de prueba. No hay código de prueba, solo datos de prueba estándar, aunque esto no es
En realidad comprobado: advertencia de emptor. Los campos adicionales de los casos de prueba son igualmente
ignorado. </p>
<p> Este tipo de pregunta se vuelve muy ineficiente si hay muchos casos de prueba, ya que
cada uno necesita un ciclo completo de compilación y ejecución en el servidor Jobe. Es
posible envolver todas las pruebas en un solo trabajo de Python que se envía al sandbox
servidor y compila el programa solo una vez, luego lo ejecuta en cada caso de prueba.
Para obtener detalles sobre este enfoque, consulte el foro de autores de preguntas en
coderunner.org.nz. </p> ';
$string['qtype_multilanguage'] = '<p> Un estilo de "escribir un programa"
de pregunta en la que el alumno puede enviar una respuesta en cualquiera de los
siguientes lenguajes: C, C ++, Java, Python3. La respuesta de la pregunta del estudiante
el cuadro tiene un menú desplegable en la parte superior, con el cual el alumno debe seleccionar
el idioma en el que se escribe su respuesta. </p>
<p> Se pueden agregar más idiomas, si son compatibles con el servidor Jobe, por
agregando el nombre del idioma al campo <i> AceLang </i> de la pregunta editar
formulario y luego extender la plantilla (qv) para manejar el nuevo idioma. </p>
<p> El código de programa enviado se ejecuta tal cual para cada caso de prueba. El código de prueba
y los campos adicionales de cada caso de prueba se ignoran. </p> ';
$string['qtype_nodejs'] = '<p> Un tipo de pregunta de JavaScript, ejecute usando nodejs. los
El programa de prueba que se ejecutará comienza con la respuesta del estudiante. Eso es seguido
por cada uno de los códigos de casos de prueba a su vez, con una cadena de separación que se imprime
entre ellos. Sin embargo, si hay alguna entrada estándar presente para cualquiera de los
casos de prueba, se realizará una ejecución de prueba por separado para cada caso de prueba. </p> <p>
Si existe un riesgo de efectos secundarios de un caso de prueba que afecte los casos de prueba posteriores
puede agregar una entrada estándar a cualquiera de los casos de prueba para forzar la ejecución de una prueba por caso
modo. </p> ';
$string['qtype_octave_function'] = '<p> Un tipo de pregunta que especifica un
Función de octava, que el alumno debe presentar en su totalidad. Cada prueba
el caso generalmente llamará a la función del estudiante con argumentos de prueba e imprimirá
El resultado o algún valor derivado de él. Si no hay entrada estándar presente
en cualquiera de las preguntas, el programa consiste en la respuesta del estudiante, el
declaración <code> format free </code> y el código de prueba de cada caso de prueba,
más una declaración extra <i> disp </i> para imprimir una cadena de separación entre
salidas de caso de prueba. </p> <p> Si hay alguna entrada estándar presente, cada prueba
el caso se ejecuta por separado. </p> ';
$string['qtype_pascal_function'] = '<p> Un tipo de pregunta Pascal donde el alumno
se le pide que escriba un procedimiento o función. El programa a ejecutar consta de
la respuesta del estudiante seguida del código de prueba CodeRunner <i> envuelto
en <code> begin ... end. </code>. <br>
Este no es un tipo de pregunta combinatoria, por lo que se realizará una ejecución de jobe por separado
para cada caso de prueba. </p> ';
$string['qtype_pascal_program'] = '<p> Un tipo de pregunta Pascal donde el alumno
La respuesta es un programa completo de Pascal. El programa se compila y ejecuta una vez
cada caso de prueba, utilizando la entrada estándar provista en el caso de prueba y
ignorando los campos <i> testcode </i> y <i> extra </i>. </p> ';
$string['qtype_php'] = '<p> Una pregunta de php en la cual la presentación del estudiante es
código php En el caso más simple, el código del estudiante comenzará con </p> <pre>
& lt;? php
</pre> pero <i> no cerrará la etiqueta PHP </i>. El motivo del no cierre
se puede ver inspeccionando la plantilla: la respuesta del estudiante es seguida por cada
de los códigos de prueba de caso de prueba. Si, en cambio, desea que el código del estudiante termine
cerrando la etiqueta PHP, debe editar la plantilla para volver a abrir la etiqueta PHP antes
La secuencia de pruebas.
</p> <p> La salida de cada caso de prueba, que debe coincidir con el caso de prueba
campo <i> esperado </i>, será la salida del código PHP del alumno
(incluido cualquier contenido fuera del alcance de las etiquetas & lt;? php ...? & gt;) más el
salida del código de prueba. </p> <p> Inspeccione el código de plantilla (haciendo clic en
<i> Personalizar </i>) para entender esto. </p> ';
$string['qtype_python2'] = '<p> Un tipo de pregunta de Python2, que puede manejar
tipos de preguntas de escribir una función, escribir una clase o escribir un programa. Para cada
caso de prueba, se ejecuta el código de respuesta del alumno seguido del código de prueba.
Así, por ejemplo, si se le pide al alumno que escriba una definición de función,
su definición se ejecutará primero, seguida por el autor
código de prueba, que normalmente llamará a la función e imprimirá el resultado o
algún valor derivado de él. </p>
<p> Si no hay entradas estándar definidas para todos los casos de prueba, la pregunta
En realidad envuelve todas las pruebas
en una sola ejecución, imprimiendo una cadena de separación entre cada salida de caso de prueba.
Tenga en cuenta que esto no es necesariamente lo mismo que ejecutar cada prueba
caso por separado. Por ejemplo, si hay alguna variable global definida por
el código del alumno, estos mantendrán sus valores en las múltiples ejecuciones.
Si es probable que esto sea un problema, la solución más fácil es definir
uno de los campos de entrada estándar de caso de prueba para ser un valor no vacío - esto
fuerza a CodeRunner a un modo alternativo de ejecutar cada caso de prueba por separado. </p> ';
$string['qtype_python3'] = '<p> Un tipo de pregunta de Python3, que puede manejar
tipos de preguntas de escribir una función, escribir una clase o escribir un programa. Para cada
caso de prueba, se ejecuta el código de respuesta del alumno seguido del código de prueba.
Así, por ejemplo, si se le pide al alumno que escriba una definición de función,
su definición se ejecutará primero, seguida por el autor
código de prueba, que normalmente llamará a la función e imprimirá el resultado o
algún valor derivado de él. </p>
<p> Si no hay entradas estándar definidas para todos los casos de prueba, la pregunta
En realidad envuelve todas las pruebas
en una sola ejecución, imprimiendo una cadena de separación entre cada salida de caso de prueba.
Tenga en cuenta que esto no es necesariamente lo mismo que ejecutar cada prueba
caso por separado. Por ejemplo, si hay alguna variable global definida por
el código del alumno, estos mantendrán sus valores en las múltiples ejecuciones.
Si es probable que esto sea un problema, la solución más fácil es definir
uno de los campos de entrada estándar de caso de prueba para ser un valor no vacío - esto
fuerza a CodeRunner a un modo alternativo de ejecutar cada caso de prueba por separado. </p> ';
$string['qtype_undirected_graph'] = '<p> Un tipo de pregunta de python3 que le pide al alumno que dibuje
un gráfico no dirigido para satisfacer algunas especificaciones. El autor de la pregunta tiene que escribir
Código de Python3 para verificar el gráfico resultante. </p> <p> Tenga en cuenta que en realidad no es
es necesario usar este tipo de pregunta para gráficos no dirigidos, como la funcionalidad
se proporciona principalmente por el complemento GraphUI. Si el procesamiento previo del gráfico se realizó
con este tipo de pregunta no se ajusta a sus necesidades, puede usar un
Pregunta de Python3 (o cualquier otro idioma), configure la interfaz de usuario en GraphUI y analice
la versión serializada en JSON del gráfico (la variable Twig STUDENT_ANSWER & nbsp;)
usted mismo. Sin embargo, este tipo de pregunta proporciona un ejemplo de cómo usar el
Complemento GraphUI. Haga clic en <i> Personalizar </i> & nbsp; para ver el código de la plantilla. </p>
<p> La especificación le pedirá al estudiante que dibuje un gráfico no dirigido para satisfacer
ciertos requisitos, por ejemplo, una representación gráfica de un conjunto de ciudades conectadas
por caminos de dos vías. El código del caso de prueba y / o el código adicional
luego analice el gráfico e imprima un mensaje para el alumno, como OK si
el gráfico es correcto o un mensaje de error informativo adecuado de lo contrario. </p>
<p> La plantilla para esta pregunta analiza el gráfico serializado JSON, extrayendo
su topología en forma de un diccionario de adyacencia & nbsp; <i> gráfico </i>. Esta
variable está disponible para la prueba o código adicional en el caso de prueba. Claves en el
diccionario son nombres de nodo, si se proporcionan, o etiquetas de identificación de nodo arbitrarias de
el formulario # 1, # 2, etc. de lo contrario. Los valores en el diccionario son listas de aristas,
ordenado por nombre o identificador de nodo vecino, cada borde es una tupla
(neighbourId, edgeLabel). </p> <p> Cada entrada en la lista de adyacencia tiene la forma
(nodeNameOrId, vecinos) donde vecinos es una lista de tuplas
(vecinoNodeNameOrId, edgeLabel). Si los nodos reciben nombres, se usan
como identificadores de nodo, de lo contrario se utilizan los nombres # 1, # 2, etc. La adyacencia
La lista y la lista de vecinos se ordenan por nombre de nodo o identificador. </p>
<p> La plantilla es combinatoria: el <i> testcode </i> & nbsp; y
<i> extra </i> & nbsp; el código se ejecuta para cada caso de prueba. </p> <p> Como un simple
ejemplo, si la especificación fuera simplemente "Dibuje un gráfico no dirigido con dos nodos
etiquetado A y B, con un borde entre los dos nodos ", un caso de prueba adecuado (aunque con
salida de error inútil) podría ser: </p> <pre>
if set (graph.keys ()) == {\'A \', \'B \'} y len (graph [\'A \']) == 1 y len (graph [\'B \'] ) == 1 y gráfico [\'A \'] [0] [0] == \'B \':
    imprimir (\'OK \')
más:
    imprimir (\'No \')
</pre>
<p> Alternativamente, podría haber un conjunto de casos de prueba, cada uno verificando
Uno de los aspectos de la especificación. Por ejemplo, el primer caso de prueba podría
imprima las teclas ordenadas, esperando ver \'A \', \'B \'. El segundo caso de prueba podría
imprima los bordes conectados al nodo \'A \', y así sucesivamente. </p>
<p> La pregunta toma los siguientes parámetros de plantilla, todos los cuales son reconocidos
mediante el complemento GraphUI y controlar su comportamiento. </p>
<p> <ul>
<li> isfsm. Verdadero si el gráfico es de una máquina de estados finitos. Si es cierto, el gráfico
puede contener un borde entrante de la nada (el borde inicial) y los nodos pueden ser
marcado como estados de aceptación (se muestra con un círculo doble) haciendo doble clic. Valor predeterminado: falso. </li>
<li> está dirigido. Verdadero si los bordes están dirigidos. Valor predeterminado: falso. </li>
<li> noderadius. El radio de un nodo, en píxeles. Valor predeterminado: 26. </li>
<li> tamaño de fuente. El tamaño de fuente utilizado para las etiquetas de nodo y borde. Valor predeterminado: 20 puntos. </li>
<li> desplazamiento de texto. Un desplazamiento en píxeles utilizado al colocar el texto de la etiqueta del enlace. Obsoleto
como texto de enlace ahora se puede arrastrar manualmente. Predeterminado 5. </li>
<li> helpmenutext. Una cadena que se utilizará en lugar de la información de ayuda predeterminada, si se proporciona.
Sin valor predeterminado. </li>
<li> locknodepositions. Verdadero para evitar que el usuario mueva nodos. Útil cuando el
el cuadro de respuesta está precargado con un gráfico que el alumno debe anotar
cambiando etiquetas de nodo o borde o agregando / eliminando bordes. Nota, aunque eso
los nodos todavía se pueden agregar y eliminar (pero vea locknodeset). </li>
<li> etiquetas de bloqueo. True para evitar que el usuario edite etiquetas de nodo (incluyendo
de nodos recién agregados). Esto también evitará que los nuevos nodos tengan etiquetas no vacías.
Valor predeterminado: falso. </li>
<li> locknodeset. Verdadero para evitar que el usuario agregue o elimine nodos o (para FSM)
alternar el estado de aceptación. Valor predeterminado: falso </li>
<li> posiciones de bloqueo. Es cierto para evitar que el usuario arrastre bordes para cambiar
su curvatura También asegura que
los bordes agregados por un alumno son rectos, por ejemplo, para dibujar un polígono en un conjunto de
puntos dados Valor predeterminado: falso. </li>
<li> lockgelabels. Verdadero para evitar que el usuario edite etiquetas de borde. Esto también
evita etiquetas no vacías en nuevos bordes. Valor predeterminado: falso. </li>
<li> conjunto de bloqueo. True para evitar que el usuario agregue bordes o elimine
bordes de, el gráfico precargado. Valor predeterminado: falso. <li>
</ul> </p> ';
$string['qtype_python3_w_input'] = '<p> Un tipo de pregunta de Python3, que puede manejar
tipos de preguntas de escribir una función, escribir una clase o escribir un programa. Difiere
del tipo de pregunta <i> python3 </i> un poco más simple en que lo habitual
La función <i> input </i> de python3 se reemplaza con una versión personalizada que hace eco
entrada estándar a salida estándar a medida que se consume. Esto da como resultado la salida
imitando lo que ven los estudiantes cuando prueban con la entrada del teclado.
En su lugar, se recomienda para el tipo de pregunta <i> python3 </i> para cualquier
preguntas que involucran llamadas a <i> input </i> en la programación introductoria
cursos, donde es probable que los estudiantes se confundan por no hacer eco de
entrada estándar cuando se toma de un archivo. </p> <p> Un pequeño inconveniente de esta pregunta
tipo comparado con el tipo de pregunta <i> python3 </i> es que cualquier mensaje de error
en el código del estudiante tendrá números de línea confusos, ya que el sustituto
la función de entrada se inserta antes del código del alumno. </p>
<p> Para cada
caso de prueba, se ejecuta el código de respuesta del alumno seguido del código de prueba.
Así, por ejemplo, si se le pide al alumno que escriba una definición de función,
su definición se ejecutará primero, seguida por el autor
código de prueba, que normalmente llamará a la función e imprimirá el resultado o
algún valor derivado de él. </p>
<p> Si no hay entradas estándar definidas para todos los casos de prueba, la pregunta
En realidad envuelve todas las pruebas
en una sola ejecución, imprimiendo una cadena de separación entre cada salida de caso de prueba.
Tenga en cuenta que esto no es necesariamente lo mismo que ejecutar cada prueba
caso por separado. Por ejemplo, si hay alguna variable global definida por
el código del alumno, estos mantendrán sus valores en las múltiples ejecuciones.
Si es probable que esto sea un problema, la solución más fácil es definir
uno de los campos de entrada estándar de caso de prueba para ser un valor no vacío - esto
fuerza a CodeRunner a un modo alternativo de ejecutar cada caso de prueba por separado. </p> ';
$string['qtype_sql'] = '<p> Un tipo de pregunta SQL, usando sqlite3,
ejecutar desde Python3. sqlite3 debe estar instalado en el servidor Jobe para esta pregunta
tipo. </p>
<p> El directorio de trabajo busca archivos con una extensión \'. db \'. Si
solo hay un archivo de este tipo, se utiliza como la base de datos sqlite3 para todas las pruebas.
Varios archivos .db actualmente emiten un mensaje de error; una posible extensión es
usar diferentes archivos db para cada prueba, por ejemplo, en orden ordenado. </p>
<p> Para cada prueba, un script de comando sqlite3 del formulario </p>
<pre> .mode column <br> .headers en <br> & lt; code en extra & gt; <br> & lt; respuesta del estudiante & gt; <br> & lt; testcode & gt; </pre>
<p> se ejecuta. </p>
<p> Se utiliza una copia nueva del archivo db para cada caso de prueba. & nbsp; </p>
<p> Se puede usar un parámetro de plantilla <i> anchuras de columna </i> & nbsp; para configurar el informe
anchos de columna. Por defecto, sqlite3 establece que cada ancho de columna sea el máximo de
tres números: 10, el ancho del encabezado y el ancho de la primera fila de datos.
Una cadena de plantilla como </p> <pre> <code> {"columnwidths": [10, 50, 10, 5]}
</code> </pre>
<p> en su lugar usará anchos de columna de 10, 50, 10 y 5 para las primeras cuatro columnas. </p> ';
$string['qtypehelp'] = 'Ayuda con q-type';
$string['questioncheckboxes'] = 'Personalización';
$string['questioncheckboxes_help'] = 'Para personalizar el tipo de pregunta, por ejemplo, para editar las plantillas de preguntas o
parámetros de sandbox, haga clic en \'Personalizar \'
casilla de verificación y lea la ayuda disponible en los elementos de formulario recientemente visibles para
más información.
 
Si se hace clic en la casilla de verificación de depuración de plantilla, el programa genera
para cada caso de prueba se mostrará en la salida. ';
$string['questionloaderror'] = 'Error al cargar la pregunta';
$string['questionpreview'] = 'Vista previa de la pregunta';
$string['questiontype'] = 'Tipo de pregunta';
$string['question_type_changed'] = 'Cambio del tipo de pregunta. Haga clic en Aceptar para volver a cargar los campos de personalización, en Cancelar para conservar los personalizados. ';
$string['questiontype_help'] = 'Seleccione el tipo particular de pregunta.
 
El cuadro combinado selecciona uno de los tipos integrados, cada uno de los cuales
especifica un idioma particular y, a veces, un entorno limitado en el que
El programa se ejecutará. Cada tipo de pregunta tiene un
plantilla que define cómo se construye el programa ejecutable a partir de
datos del caso de prueba y la respuesta del alumno.
 
La plantilla se puede ver y personalizar opcionalmente haciendo clic
la casilla de verificación \'Personalizar \'.
 
Si se hace clic en la casilla de verificación de depuración de plantilla, el programa genera
para cada caso de prueba se mostrará en la salida. ';
$string['questiontypedetails'] = 'Detalles del tipo de pregunta';
$string['questiontype_required'] = 'Debe seleccionar el tipo de pregunta';
$string['qWrongBehaviour'] = 'Utilice el comportamiento adaptativo para todas las preguntas de CodeRunner, o puede haber grandes éxitos de rendimiento. Por ejemplo, todas las preguntas en una página deberán volverse a clasificar cuando se vuelva a mostrar la página. ';
$string['regexgrader'] = 'Expresión regular';
$string['replaceollarscount'] = 'Esta categoría contiene {$a} preguntas de CodeRunner';
$string['replaceexpectedwithgot'] = 'Haga clic en & lt; & lt; botón para reemplazar la salida esperada de este caso de prueba con la salida real. ';
$string['resultcolumns'] = 'Columnas de resultados';
$string['reset'] = 'Restablecer respuesta';
$string['resethover'] = 'Descartar los cambios y restablecer la respuesta al valor precargado original';
$string['resultcolumnheader'] = 'Resultado';
$string['resultcolumns_help'] = 'Por defecto, la tabla de resultados muestra el código de prueba, stdin, esperado y obtenido
columnas, siempre que las columnas no estén vacías. Puede cambiar el valor predeterminado y / o
los encabezados de columna ingresando un valor para las columnas de resultados (deje en blanco para
El comportamiento predeterminado).
 
Si se proporciona, el campo de columnas de resultado debe ser un
Lista codificada por JSON de especificadores de columna. Cada especificador de columna es en sí mismo una lista,
típicamente con solo dos o tres elementos. El primer elemento es la columna.
encabezado, el segundo elemento es el campo del objeto TestResult que se está
se muestra en la columna y el tercer elemento opcional es un formato sprintf
cadena utilizada para mostrar el campo.
 
Los campos disponibles en el estándar
Los objetos TestResult son: código de prueba, stdin, esperado, obtenido, extra, premiado y marca.
testcode, stdin, esperado y extra son los campos del caso de prueba mientras se obtiene
es la salida real generada y otorgada y la marca es la marca otorgada real
y la marca máxima para el caso de prueba respectivamente.
 
Los evaluadores de plantilla por prueba pueden
agregar sus propios campos, que también se pueden seleccionar para mostrar. Tambien es
es posible combinar múltiples campos en una columna agregando campos adicionales al
especificador: estos deben preceder al especificador de formato sprintf, que luego se convierte en
obligatorio. Por ejemplo, para mostrar una columna Marcar fracción en la forma 0.74 / 1.00,
digamos, un especificador de formato de columna de ["Fracción de marca", "otorgado", "marca",
"% .2f /%. 2f"] podría usarse.
 
Como otro caso especial, un formato de% h significa que
el campo de resultado de la prueba debe tomarse como HTML listo para la salida y no debe
sujeto a procesamiento adicional; esto es útil solo con plantillas de calificadores personalizados
que generan salida HTML, como gráficos SVG.
 
El valor predeterminado de
resultcolumns es [["Prueba", "código de prueba"], ["Entrada", "stdin"], ["Esperado",
"esperado"], ["Got", "got"]].
 
La configuración del campo de columnas de resultados no tiene ningún efecto si una plantilla de combinador
Se está utilizando la niveladora. El autor de la pregunta es responsable de formatear
la tabla de resultados de cualquier manera deseada. ';
$string['resultcolumnsnotjson'] = 'El campo de columnas de resultados no es una cadena JSON válida';
$string['resultcolumnsnotlist'] = 'El campo de columnas de resultados debe tener una lista codificada por JSON de especificadores de columna';
$string['resultcolumnspecbad'] = 'Especificador de columna no válido encontrado: cada uno debe ser una lista de dos o más cadenas';
$string['resultstring-norun'] = 'Sin ejecución';
$string['resultstring-compilationerror'] = 'Error de compilación';
$string['resultstring-runtimeerror'] = 'Error';
$string['resultstring-timelimit'] = 'Límite de tiempo excedido';
$string['resultstring-success'] = 'OK';
$string['resultstring-memorylimit'] = 'Límite de memoria excedido';
$string['resultstring-illegalsyscall'] = 'Llamada de función ilegal';
$string['resultstring-internalerror'] = 'Error de CodeRunner (IE): informe a un tutor';
$string['resultstring-sandboxpending'] = 'Error de CodeRunner (PD): informe a un tutor';
$string['resultstring-sandboxpolicy'] = 'Error de CodeRunner (BP): informe a un tutor';
$string['resultstring-sandboxoverload'] = 'Sobrecarga del servidor de sandbox. ¿Quizás intentarlo de nuevo pronto? ';
$string['resultstring-outputlimit'] = 'Salida excesiva';
$string['resultstring -normaltermination'] = 'Terminación anormal';
$string['run_failed'] = 'Error al ejecutar las pruebas';
$string['sampleanswerattachments'] = 'Ejemplos de adjuntos de respuestas';
$string['sampleanswerattachments_help'] = 'Si la respuesta de muestra necesita archivos adjuntos, cárguelos aquí';
$string['sandboxcontrols'] = 'Sandbox';
$string['sandboxcontrols_help'] = '
Seleccione qué sandbox usar para ejecutar las presentaciones de los estudiantes.
DEFAULT usa el sandbox de mayor prioridad disponible para el idioma elegido.
Desde que Jobe ha reemplazado todos los sandbox
tipos excepto los \'ideonesandbox \' obsoletos,
el valor \'jobesandbox \' se recomienda para uso normal, y da como resultado un mejor
mensajes de error si el servidor Jobe está inactivo.
 
También puedes configurar el
tiempo máximo de CPU en segundos permitido para cada ejecución de prueba y el máximo
memoria puede consumir una sola ejecución de caso de prueba (MB). Una entrada en blanco usa los sandbox \'s
valor predeterminado (generalmente 5 segundos para el límite de tiempo de la CPU y un idioma dependiente
cantidad de memoria), pero los valores predeterminados pueden no ser adecuados para recursos exigentes
programas Un valor de cero para la memoria máxima da como resultado que no haya límite
impuesto. La cantidad de memoria especificada aquí es la cantidad total necesaria para
La ejecución incluye todas las bibliotecas, intérpretes, máquinas virtuales, etc.
 
La entrada \'Parámetros \'
se utiliza para pasar más datos específicos de sandbox, como las opciones de compilación y
Claves API. Por lo general, debe dejarse en blanco, pero si no está en blanco, debe ser válido
Registro JSON. En el caso del sandbox de jobe, los atributos disponibles incluyen
disklimit, streamsize, numprocs, compileargs, linkargs e interpreterargs. por
ejemplo <code> {"compileargs": ["- std = c89"]} </code> para una pregunta en C forzaría a C89
cumplimiento y no se utilizarían otras opciones de C. Ver la documentación de jobe
para detalles. Algunas cajas de arena (por ejemplo, la caja de arena de Ideone en desuso) pueden ignorar silenciosamente cualquiera o todos
Estas configuraciones.
 
Si el sandbox está configurado en \'jobesandbox \', el host jobe que se utilizará para probar el
La pregunta es
generalmente como se especifica a través de la configuración del administrador para el complemento CodeRunner.
Sin embargo, es posible seleccionar un servidor de trabajo diferente definiendo un \'servidor de trabajo \'
parámetro y también, opcionalmente, un parámetro \'jobeapikey \'. Por ejemplo, si el
El campo \'Parámetros \' está configurado en <code> {"jobeserver": "myspecialjobe.com"} </code>, la ejecución
En su lugar, se enviará al servidor "myspecialjobe.com".
';
$string['sandboxerror'] = 'Error del sandbox [{$a-> sandbox}]: {$a-> message}';
$string['sandboxparams'] = 'Parámetros';
$string['seethisquestioninthequestionbank'] = 'Ver esta pregunta en el banco de preguntas';
$string['SHOW'] = 'Mostrar';
$string['showcolumns'] = 'Mostrar columnas:';
$string['showcolumns_help'] = 'Seleccione qué columnas de la tabla de resultados deberían
ser exhibido a los estudiantes. Las columnas vacías se ocultarán independientemente.
Los valores predeterminados son apropiados para la mayoría de los usos. ';
$string['showdifferences'] = 'Mostrar diferencias';
$string['showsource'] = 'Depuración de plantilla';
$string['sourcecodeallruns'] = 'Depurar: código fuente de todas las ejecuciones de prueba';
$string['stdin'] = 'Entrada estándar';
$string['stdin_help'] = 'La entrada estándar a la prueba, vista por la plantilla como {{TEST.stdin}}';
$string['student_answer'] = 'Respuesta del estudiante';
$string['supportscripts'] = 'Scripts de soporte';
$string['syntax_errors'] = 'Error de sintaxis (s)';
$string['table_ui_invalidjson'] = 'Interfaz de usuario de tabla: serialización JSON no válida';
$string['table_ui_invalidserialisation'] = 'Interfaz de usuario de tabla: serialización no válida';
$string['table_ui_missingparams'] = 'La interfaz de usuario de la tabla necesita parámetros de plantilla table_num_columns y
table_num_rows. ';
$string['template'] = 'Plantilla';
$string['template_changed'] = 'Se cambió la plantilla por prueba: ¿deshabilitar el combinador? [\'Cancelar \' lo deja habilitado.] ';
$string['templatecontrols'] = 'Controles de plantilla';
$string['templatecontrols_help'] = 'Marcando la casilla de verificación \' Es combinador \'
especifica que la plantilla es una plantilla combinadora, que combina (o intenta
combinar) la respuesta del alumno más todos los casos de prueba en una sola ejecución. Si esto
la casilla de verificación está marcada, también deberá definir el valor de test_splitter_re
campo, que es la expresión regular de PHP utilizada para dividir la salida del
El programa vuelve a ejecutarse en un conjunto de pruebas individuales. Sin embargo, no necesitas
para definir esto si también está utilizando un calificador de plantillas, como en ese caso el
El código de plantilla es responsable de dividir el resultado en sí mismo y calificarlo.
 
Las plantillas del combinador no pasan una variable TEST Twig. En cambio ellos
recibir un TESTCASES variable, que es una lista de todas las pruebas en el
pregunta. En general, se supone que el programa producido por la plantilla combina el
STUDENT_ANSWER y todos los TESTCASES en un solo programa que, cuando se ejecuta,
genera los resultados de la prueba de cada caso de prueba, separados por una cadena única.
La cadena de separación se define mediante una expresión regular dada por el formulario
campo \'test_splitter_re \' a continuación.
 
Sin embargo, si los casos de prueba tienen una entrada estándar definida, las plantillas de combinador se convierten
problemático. Si la plantilla construye un solo programa, ¿cuál debería ser el estándar?
entrada ser? La solución más simple (y predeterminada) es
ejecute los casos de prueba uno a la vez, utilizando la plantilla del combinador para construir
cada programa, pasándole una variable TESTCASES que contiene una sola prueba.
Este \'truco\' permite que la plantilla del combinador desempeñe un doble papel: se comporta
como una plantilla por caso de prueba (con una matriz TESTCASES de 1 elemento) cuando la pregunta
el autor proporciona información estándar pero como un combinador adecuado (con un elemento n
TESTCASES array) de lo contrario. Para cambiar este comportamiento para que el combinador
recibe todos los casos de prueba, incluso cuando el stdin está presente, verifique \'Permitir múltiples
stdins \'casilla de verificación.
 
Si una ejecución del programa combinador da como resultado cualquier salida a stderr, eso
se interpreta como un error de ejecución. Para asegurar que el estudiante obtenga crédito por la mayor cantidad de
pruebas válidas como sea posible, el sistema se comporta como lo hace cuando la entrada estándar
está presente, volviendo a ejecutar cada prueba por separado. Esto no lo hace
sin embargo, se aplican a los clasificadores combinados, que deben tratar con todos
los errores de tiempo de ejecución en sí mismos y siempre deben devolver un resultado JSON válido. ';
$string['templateerror'] = 'ERROR DE PLANTILLA';
$string['templategrader'] = 'Calificador de plantilla';
$string['template_help'] = 'La plantilla define los programas que se ejecutan en el sandbox para un determinado
Respuesta del estudiante y prueba (s). Hay dos
tipos de plantilla:
 
* una plantilla por prueba, que define un programa que se ejecutará para un solo caso de prueba y,
* una plantilla \'combinator \' que define un programa que combina todos los diferentes casos en un solo programa.
 
La casilla de verificación \'is_combinator \' se deja sin marcar para una plantilla por prueba y es
conjunto verificado para una plantilla de combinador. El resto de este panel de ayuda asume que
están utilizando una plantilla por prueba; ver la documentación completa para el uso de
plantillas de combinador.
 
La plantilla es procesada
por el motor de plantillas Twig (ver http://twig.sensiolabs.org)
en un contexto en el que STUDENT_ANSWER es el alumno
respuesta y TEST.testcode es el código para el caso de prueba actual. Estos valores
(y otros valores de casos de prueba como TEST.expected, TEST.stdin, TEST.mark)
se puede insertar en la plantilla encerrándolas entre llaves, p. ej.
<code> {{TEST.testcode}} </code>. Para usar dentro de cadenas literales, un escape apropiado
se debe aplicar la función, por ejemplo, <code> {{STUDENT_ANSWER | e (\'py \')}} </code> es el alumno
la respuesta se escapó de una manera adecuada para usar dentro de Python con comillas triples
instrumentos de cuerda. Otras funciones de escape son <code> e (\'c \') </code>, <code> e (\'java \') </code>,
<code> e (\'matlab \') </code>. El programa generado por Twig se compila y ejecuta
con el idioma del tipo incorporado seleccionado y con el conjunto estándar
a TEST.stdin. La salida de ese programa se pasa al calificador seleccionado.
Consulte la ayuda en \'Controles de calificación \' para obtener más información al respecto.
 
Tenga en cuenta que si se usa una plantilla personalizada por prueba
habrá un ciclo de compilación y ejecución para cada caso de prueba, mientras que la mayoría
los tipos de preguntas incorporados definen en su lugar una plantilla de combinación que combina
todos los casos de prueba en una sola corrida.
 
Si se hace clic en la casilla de verificación de depuración de plantilla, el programa genera
para cada caso de prueba se mostrará en la salida. ';
$string['templateparams'] = 'Parámetros de plantilla';
$string['templateparams_help'] = 'El campo de parámetros de plantilla le permite pasar los parámetros de cadena a una pregunta
plantillas). Si no está en blanco, debe ser un registro en formato JSON. Los campos de
el registro se puede usar dentro de la plantilla, donde aparecen como
PREGUNTA.parámetros. & Lt; & lt; param & gt; & gt ;. Por ejemplo, si los parámetros de plantilla son
 
        {"edad": 23}
 
el valor 23 sería sustituido en la plantilla en lugar de la
variable de plantilla <code> {{QUESTION.parameters.age}} </code>.
 
El conjunto de parámetros de plantilla pasados ​​a la plantilla consta de cualquier plantilla
parámetros definidos en el prototipo con los parámetros de la plantilla de preguntas
fusionados. Los parámetros de las preguntas pueden anular los parámetros del prototipo, pero no
borra los.
 
Los parámetros de plantilla también se pueden usar para proporcionar aleatorización dentro de una pregunta.
Cuando se instancia la pregunta por primera vez, se pasan los parámetros de la plantilla
a través del motor de plantillas Twig para obtener la versión final de JSON.
La función "aleatoria" de Twig puede
se utilizará para asignar valores aleatorios a los parámetros de la plantilla. Si la casilla de verificación "Twig All"
está marcado, todos los demás campos de la pregunta (texto de pregunta, respuesta, casos de prueba
etc) también son procesados ​​por Twig, con los parámetros de la plantilla como
ambiente. Esto puede resultar en diferentes
Los estudiantes ven diferentes variantes aleatorias de la pregunta. Ver la documentación
para detalles.';
$string['testalltitle'] = 'Probar todas las preguntas en este contexto';
$string['testallincategory'] = 'Probar todas las preguntas en esta categoría';
$string['testcase'] = 'Caso de prueba {$a}';
$string['testcasecontrols'] = 'Propiedades de prueba:';
$string['testcasecontrols_help'] = 'Si \' Usar como ejemplo \'está marcado, esta prueba se incluirá automáticamente en el
pregunta \'s \' Por ejemplo: \'tabla de resultados.
 
El cuadro combinado \'Pantalla \' determina cuándo se muestra este caso de prueba al alumno
en la tabla de resultados.
 
Si se marca \'Ocultar descanso si falla \' y esta prueba falla, todas las pruebas posteriores
estar oculto para el alumno, independientemente de la configuración del cuadro combinado \'Pantalla \'.
 
\'Mark \' establece el valor de este caso de prueba; significativo solo si esto no es un
Pregunta de \'Todo o nada\'.
 
\'Ordenar \' se puede usar para cambiar el orden de los casos de prueba cuando la pregunta es
guardado: los casos de prueba están ordenados por este campo. ';
$string['testcases'] = 'Casos de prueba';
$string['testcode'] = 'Código de prueba';
$string['testcolhdr'] = 'Prueba';
$string['testingquestion'] = 'Pregunta de prueba {$a}';
$string['testsplitterre'] = 'Divisor de prueba (expresiones regulares)';
$string['testcode_help'] = 'El código para la prueba, visto por la plantilla como {{TEST.testcode}}';
$string['testtype'] = 'Precheck test type';
$string['testtype_help'] = 'Si el Prechecking está habilitado y configurado en \' selected \', esta configuración controla si
la prueba se usa solo con una ejecución normal, solo con una ejecución previa a la verificación o en ambas ejecuciones.
Si la comprobación previa está configurada en otra cosa que no sea \'seleccionado\', esta configuración es
ignorado ';
$string['testtype_normal'] = 'Verificar solo';
$string['testtype_precheck'] = 'Precheck only';
$string['testtype_both'] = 'Ambos';
$string['tooshort'] = 'La respuesta es demasiado corta para ser significativa y ha sido ignorada sin penalización';
$string['twigall'] = 'Twig all';
$string['twigcontrols'] = 'Controles de Twig';
$string['twigcontrols_help'] = 'Los parámetros de plantilla normalmente se mencionan durante la expansión de Twig en el formulario
{{QUESTION.parameters.someparam}} Sin embargo, si los parámetros de la plantilla de elevación
la casilla de verificación está marcada, los parámetros se izan en el espacio de nombre global de Twig
y puede ser referenciado simplemente como {{someparam}}.
 
El macroprocesador Twig se aplicaba tradicionalmente solo a la plantilla. Esto es ahora
aplicado a los parámetros de la plantilla también y, si Twig All está marcado, a la
texto de pregunta, respuesta de muestra, precarga de respuesta y todos los campos de casos de prueba, utilizando
los parámetros de plantilla expandidos Twig como un entorno. Por lo general
necesita activar TwigAll si usa la aleatorización dentro de los parámetros de la plantilla ';
$string['twigerror'] = 'Error de Twig {$a}';
$string['twigerrorintest'] = 'Error de Twig al procesar esta prueba {$a}';
$string['type_header'] = 'Tipo de pregunta de CodeRunner';
$string['typename'] = 'Tipo de pregunta';
$string['typerequired'] = 'Seleccione el tipo de pregunta (idioma, formato, etc.)';
$string['uicontrols'] = 'UI de entrada';
$string['uicontrols_help'] = 'Seleccione los controladores de la interfaz de usuario para la respuesta del estudiante y
la plantilla del autor de la pregunta.
 
El menú desplegable Respuesta del alumno muestra una lista
de complementos disponibles. Para las preguntas de codificación, generalmente se usa el editor Ace.
Se puede usar un valor de \'Ninguno\' para proporcionar solo un cuadro de texto sin formato.
 
El valor
\'Graph\' proporciona al usuario una interfaz de usuario de dibujo gráfico simple para su uso
con preguntas que le piden al alumno que dibuje un gráfico con alguna especificación; tal
las preguntas generalmente tendrán un solo caso de prueba, calificado con una plantilla
que analiza el serializado
representación del gráfico e imprime un mensaje como "OK" si la respuesta es
correcto o un mensaje de error informativo adecuado de lo contrario.
Los parámetros de plantilla se pueden establecer en el prototipo o en el
pregunta real para modificar el comportamiento del complemento Graph de la siguiente manera:
{"isdirected": false} para gráficos no dirigidos; {"isfsm": verdadero} para permitir
bordes entrantes sin un nodo de inicio y para permitir hacer doble clic en un nodo
definirlo como un estado de aceptación;
{"noderadius": 30}, por ejemplo, para establecer un noderadius diferente en píxeles;
{"helpmenutext": "Line1 \ nLine2 \ nLine3"} para reemplazar el menú de ayuda predeterminado con un
versión personalizada Otros parámetros de la plantilla se documentan dentro de la función integrada.
tipo de pregunta dirigida \ _graph y no dirigida \ _graph.
Los parámetros de la plantilla
de la pregunta real se fusionan con, y anulan, los de la
prototipo (desde CodeRunner V3.2.2).
 
El elemento de interfaz de usuario \'Tabla \', que muestra una tabla de texto
áreas para que el estudiante
rellenar. Es utilizado por el tipo de pregunta \'python3_program_testing \', que es
incluido en las preguntas de muestra en github. Esto toma parámetros de plantilla de
table_num_rows y table_num_columns (se requieren ambos) y table_column_headers opcionales
(una lista de cadenas con las que etiquetar columnas), table_row_labels (una lista de
cadenas con las que etiquetar filas) y table_column_width_percents (una lista de
los porcentajes del ancho de la tabla para asignar a todas las columnas, incluida la
columna de etiqueta de fila si se especifica) y table_locked_cells (una lista de [fila, columna]
pares de celdas que el usuario no puede alterar: los índices de fila y columna son
Origen 0 pero no incluye la columna de etiqueta de fila o la fila de encabezado de columna).
 
Las interfaces de usuario \'Gapfiller \' y \'Html \' están documentadas en el
documentación principal de CodeRunner en https://github.com/trampgeek/moodle-qtype_coderunner#code-runner.
 
Estudiantes con problemas de visión o autores que deseen inspeccionar serializaciones.
(por ejemplo, para comprender la representación utilizada por la interfaz gráfica de usuario),
puede alternar el uso de todos los complementos de IU en la página actual escribiendo
Ctrl-Alt-M.
 
Cualquier valor seleccionado para la respuesta del alumno también se utilizará dentro de
el formulario del editor para los campos Respuesta de muestra y Carga previa de respuesta.
 
Si \'La plantilla usa as \' está marcada,
el editor de código Ace gestionará tanto la plantilla como los parámetros de la plantilla
cajas De lo contrario, se utilizará un cuadro de texto sin formato. ';
$string['ui_fallback'] = 'Volviendo al área de texto sin formato.';
$string['unauthorisedbulktest'] = 'No tiene acceso adecuado a ninguna pregunta de CodeRunner';
$string['unauthoriseddbaccess'] = 'No tiene autorización para usar este script';
$string['unknownerror'] = 'Se produjo un error inesperado. La caja de arena puede estar abajo. Inténtalo de nuevo en breve. ';
$string['unknowncombinatorgraderfield'] = 'Nombre de campo desconocido ({$a-> fieldname}) en la salida del calificador combinador';
$string['unserializefailed'] = 'Los resultados de la prueba almacenados no se pudieron deserializar. ¿Quizás intente regrading? ';
$string['useasexample'] = 'Usar como ejemplo';
$string['useace'] = 'La plantilla usa el editor Ace';
$string['validateonsave'] = 'Validar al guardar';
$string['wrongnumberofformats'] = 'Número incorrecto de formatos de columna de resultados de prueba. Se esperaba {$a-> esperado}, consiguió {$a-> got} ';
$string['xmlcoderunnerformaterror'] = 'Error de formato XML en la pregunta del codificador';
