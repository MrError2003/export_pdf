<?php
require __DIR__ . '/vendor/autoload.php';

class PDF extends FPDF
{
    function __construct()
    {
        parent::__construct('P', 'mm', 'Letter');
        // Establecer márgenes: izquierdo, superior, derecho
        $this->SetMargins(30, 35, 30);
        // Establecer margen inferior
        $this->SetAutoPageBreak(true, 20);
        // Establecer fuente y tamaño como regla general
        $this->SetFont('Arial', '', 11); // Fuente Arial, normal, tamaño 11
    }

    // Pie de página
    function Footer()
    {
        // Posición a 1.5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página solo en la parte inferior derecha
        $this->Cell(0, 10, $this->PageNo(), 0, 0, 'R');
    }
}

// Crear instancia de la clase PDF
$pdf = new PDF();
$pdf->AddPage();

// Contenido del contrato
$contenido = [

    "CONTRATO DE ADMINISTRACIÓN DE INMUEBLE POR ARRENDAMIENTO\n\n",

    "Entre los suscritos, (INGRESAR NOMBRE DEL PROPIETARIO) C.C. XXXXXXXX, quien obra en nombre propio, y quien en adelante y para efectos del presente contrato se denominará el MANDANTE y MARIA NOHELIA BELTRAN MONTOYA, mayor y vecino(a) del Municipio de Sabaneta, identificado con la cédula de ciudadanía No 42.820.973 en calidad de Representante Legal de SOMOS PROPIEDAD S.A.S., sociedad identificada con Nit. 811.008.756-8, quien en adelante y para efectos del presente contrato se llamará LA ADMINISTRADORA, hemos celebrado el contrato de administración de inmueble para arrendamiento, el cual se regirá por la legislación comercial colombiana, el Código Civil y por las siguientes cláusulas que durante su vigencia y posteriores prorrogas constituirán ley para las partes en virtud de la manifestación expresa de su voluntad:",

    "\nPRIMERA: " . $pdf->SetFont('Arial', 'B', 11) . "OBJETO: " . $pdf->SetFont('Arial', '', 11) . "EL MANDANTE concede a la ADMINISTRADORA la gestión de administrar y arrendar, en su propio nombre, pero por cuenta y riesgo de EL MANDANTE, el bien inmueble ubicado en la XXXX",

    "\nSEGUNDA: FACULTADES DE LA ADMINISTRADORA. El MANDANTE, le otorga a la ADMINISTRADORA las siguientes facultades:",

    "1.	Fijar el valor del canon de arrendamiento previamente concertado con el MANDANTE ó quien represente sus intereses, teniendo en cuenta que, en materia de inmueble destinados a vivienda urbana EL MANDANTE, obrará de conformidad con las disposiciones legales vigente.",

    "2.	Celebrar a nombre propio los contratos de arrendamiento respectivos, bajo las garantías que a su juicio sean oportunas.",

    "3.	Facturar y cobrar al arrendatario o quien haga sus veces, el valor del arrendamiento cuyo monto inicial es de XXXXXXXXXX mensual, estando su incremento condicionado a lo pactado en el contrato de arrendamiento. El incremento acordado con el arrendatario equivale a el Índice de Precios al Consumidor (I.P.C.) en el año calendario inmediatamente anterior para vivienda. Para comercial el incremento anual será el convenido entre las partes o el autorizado por el propietario.",

    "4.	Cobrar a EL ARRENDATARIO la cuota ordinaria de administración, cuando dicho concepto esté a cargo de EL ARRENDATARIO.",

    "5.	Facturar y recaudar el Impuesto al Valor Agregado (I.V.A) que le corresponda pagar a los ARRENDATARIOS en caso de que el canon de arrendamiento se encuentre gravado. Para tales efectos EL MANDANTE se obliga a aportar oportunamente a la ADMINISTRADORA el Registro Único Tributario (R.U.T) correspondiente, donde consta su condición tributaria (Régimen común), documento que EL MANDANTE autoriza sea suministrado a EL ARRENDATARIO.",

    "6.	Pagar por cuenta del MANDANTE, previa autorización escrita de este, los impuestos con que fuere gravado el inmueble, tasas, contribuciones, valorizaciones, los servicios públicos, cuotas de administración ordinarias y extraordinarias, intereses y los demás gastos que no corresponda pagar a LOS ARRENDATARIOS y aún aquellos que siendo de cargo de los mismos, no estuvieran cancelados por ellos al fin del arrendamiento.",

    "7.	Efectuar por cuenta del MANDANTE y bajo previa autorización, las reparaciones que LA ADMINISTRADORA juzgue convenientes para la conservación del inmueble o para facilitar su arrendamiento, así como aquellas que sean solicitadas por EL ARRENDATARIO u ordenadas por las autoridades, siempre que legalmente no corresponda hacerlas a LOS ARRENDATARIOS.",

    "8. Anunciar en arriendo el bien cuando a su criterio lo crea necesario y por el medio que se considere más conveniente para los intereses de El (La) Mandante. Deberá hacer los trámites necesarios para que ello sea posible, cuando El (La) Mandante disponga que a su costa debe realizarse una publicidad especial tendiente a interesar posibles arrendatarios.",

    "9.	Utilizar las alianzas estratégicas de LA ADMINISTRADORA con otras empresas inmobiliarias para lograr el arrendamiento del inmueble de una forma más rápida eficiente y compartir con ellas los honorarios pactados con el PROPIETARIO sin que esto conlleve obligación contractual del PROPIETARIO diferente a la que se adquirió con el ADMINISTRADOR.",

    "10. Autorizar la terminación del contrato de arrendamiento cuando dicha terminación se enmarque en cualquiera de las circunstancias descritas en el parágrafo noveno de esta misma cláusula.",

    "11. Descontar del valor mensual del arrendamiento su comisión por gestión administrativa y los gastos generados por el inmueble y que estén a cargo de EL MANDANTE.",

    "12. Las demás que estipulen en el presente contrato y en la Ley.\n",

    "PARAGRAFO PRIMERO. Si después de ser firmado este contrato y antes de ser arrendado el inmueble materia del mismo, EL MANDANTE decidiere no arrendarlo, LA ADMINISTRADORA tendrá derecho a cobrarle los gastos en que haya incurrido. Estos pagos los hará EL MANDANTE en el momento de comunicar su decisión de no arrendar. Para sus efectos, LA ADMINISTRADORA le detallará los gastos y sus respectivos soportes en facturas o similares, si es el caso.

    PARÁGRAFO SEGUNDO. Si el incremento acordado con EL ARRENDATARIO tiene alguna modificación, modificación concertada con el MANDANTE, así se hará constar en documento que formará parte del presente contrato.

    PARAGRAFO TERCERO. EL MANDANTE declara que al momento de entregar el inmueble para ser administrado por SOMOS PROPIEDAD S.A.S. fue informado sobre la reglamentación legal existen sobre la fijación del precio y los incrementos de los inmuebles con destinación de vivienda urbana, normas que son de estricto cumplimiento por ser carácter público. La fijación del precio se determina aplicando sobre el valor catastral del inmueble un porcentaje equivalente al 2%. De no existir facturación catastral, el porcentaje referido se aplicará sobre el valor comercial que conste en el documento relacionado con la enajenación del inmueble. De solicitar EL MANDANTE, que el precio se fije por encima del tope legal, deberá asumir las sanciones administrativas o reclamaciones legales que, al respecto, puede presentar El Arrendatario.

    PARAGRAFO CUARTO. Dado que el IVA (impuesto al valor agregado) es una obligación tributaria que deberá asumir EL ARRENDATARIO, cuando inmueble tiene destinación comercial, si éste, EL ARRENDATARIO, no llegare a asumir dicha carga y se negare a pagarlo, LA ADMINISTRADORA informará a EL MANDANTE tal situación, para definir conjuntamente las acciones legales a tomar. Los costos de las acciones judiciales o extrajudiciales estarán a cargo de EL MANDANTE.

    PARAGRAFO QUINTO. En lo referente a las expensas comunes necesarias (cuota ordinaria de administración), se manejará así: 1. Si la cuota está a cargo de EL ARRENDATARIO y EL MANDANTE autoriza a LA ADMINISTRADORA pagar a la copropiedad, LA ADMINISTRADORA descontará dicho concepto del giro a realizar a EL MANDANTE y lo pagará a la correspondiente copropiedad. 2. Si el concepto está a cargo de EL ARRENDATARIO, pero el MANDANTE se hace responsable del pago, EL MANDANTE será quien deberá mantener el pago de la cuota al día en la copropiedad. De no cumplir con dicha obligación y EL ARRENDATARIO fuera afectado con el cobro de dicho concepto o la privación del uso de zonas comunes no indispensables, EL MANDANTE responderá por los perjuicios reclamados por EL ARRENDATARIO y la posible terminación del contrato de arrendamiento, en el evento que EL ARRENDATARIO invoque tal afectación como una justa causa de terminación.

    PARAGRAFO SEXTO. Si informado EL MANDANTE sobre las reparaciones necesarias del inmueble, previa valoración del inmueble por parte de LA ADMINISTRADORA no da respuesta o instrucciones sobre la ejecución, se entenderá que LA ADMINISTRADORA está autorizada a realizar las reparaciones bajo la responsabilidad pecuniaria de EL MANDANTE; en beneficio del inmueble y el buen uso y goce del ARRENDATARIO. EL MANDANTE tendrá cinco (5) días hábiles contados desde el momento de la notificación para respuesta a EL MANDANTE. ",

    "PARAGRAFO SEPTIMO. Si LA ADMINISTRADORA realiza todas las gestiones necesarias para ubicar a EL MANDANTE y dicha ubicación no es posible, estará facultada para autorizar las reparaciones necesarias requeridas por EL ARRENDATARIO.

    PARAGRAFO OCTAVO. Si EL MANDANTE se hace cargo de ejecutar las reparaciones necesarias con personal de su confianza y no cumple con dicha obligación o lo hace de manera tardía o defectuosa, podrá LA ADMINISTRADORA realizar las reparaciones a cargo de EL MANDANTE o autorizar a EL ARRENDATARIO la terminación del contrato, si dichas reparaciones llegaren a afectar la ejecución del contrato de arrendamiento y dicha terminación fuere invocada por el arrendatario.

    PARAGRAFO NOVENO. Podrá la ADMINSITRADORA autorizar y/o negociar la terminación del contrato de arrendamiento y consecuente entrega material del inmueble:
    a)	Cuando exista orden de autoridad competente sea esta de naturaleza administrativa o judicial.
    b)	En casos de fuerza mayor o caso fortuito debidamente acreditados por el ARRENDATARIO.
    c)	Cuando EL ARRENDATARIO haya notificado la terminación en debida forma y no haya sido posible ubicar a EL MANDANTE para notificarle tal decisión.
    d)	Cuando el inmueble sea abandonado por EL ARRENDATARIO y habiendo verificado tal abandono, LA ADMININSTRADORA consideré la conveniencia de recuperar materialmente el inmueble.
    e)	Cuando exista una causal de terminación en que haya incurrido EL ARRENDATARIO de gran impacto y con posibles efectos negativos que afecten a LA ADMINSTRADORA y/o a EL MANDANTE.
    f)	Cuando la compañía de seguros y/o fianza que respalda el contrato de arrendamiento, requiera dicha terminación so pena de suspender el pago del siniestro, dadas las circunstancias especiales por las cuales puede estar pasando el arrendatario, esto es, problemas de insolvencia o no ubicación del arrendatario y/o deudores solidarios.
    g)	Cuando el arrendatario proponga la terminación reconociendo la respectiva penalidad y LA ADMINISTRADORA no haya ubicado a ELMANDANTE.

    PARAGRAFO DECIMO. Mientras el inmueble se encuentre en etapa de promoción, es decir, no exista contrato de arrendamiento, LA ADMINISTRADORA no se hace responsable del estado material del inmueble o daños que pueda sufrir ocasionados por terceros, pues dicha responsabilidad será exclusiva de EL MANDANTE, salvo que exista pacto de administración exclusiva del inmueble, pacto suscrito por las partes, previo a la promoción del inmueble.

    TERCERA. OBLIGACIONES DE LA ADMINISTRADORA: son obligaciones de LA
    ADMINISTRADORA, las siguientes:

    1.	Pagar a EL MANDANTE el valor neto del canon de arrendamiento establecido en el respectivo contrato, pago que realizará dentro de los cinco (05) días hábiles de cada periodo mensual. El valor neto es el resultante de descontar del valor del arrendamiento mensual los gastos y costos que haya generado el inmueble que estén a cargo de EL MANDANTE y la gestión de la ADMINISTRADORA (comisión).
    2.	Elaborar un inventario del estado en que se encuentra el inmueble al momento de celebrar el contrato de arrendamiento, el cual deberá ser confrontado a la terminación, del mismo.
    3.	Comunicar a EL MANDANTE, tan pronto tenga conocimiento, cualquier clase de requerimiento, actuación y exigencia proveniente de cualquier autoridad judicial o administrativa relacionada con el inmueble.
    4.	Comunicar con la debida antelación a EL MANDANTE, cualquier pago que deba hacerse ante las autoridades nacionales, departamentales o municipales en relación con el inmueble.
    5.	Atender las novedades, incrementos en el canon, vencimientos y ofertas de renovación con relación a los contratos de arrendamiento, celebrados sobre el inmueble administrado.
    6.	Las demás obligaciones que estipule el presente contrato y la ley.
    
    PARAGRAFO PRIMERO. La obligación de pago a la cual hace referencia el numeral primero de este artículo, tendrá el siguiente manejo: 1. LA ADMINISTRADORA pagará a EL MANDANTE el valor de los cánones de arrendamiento hasta la entrega material del inmueble por parte del arrendatario. Pero si dicha entrega supera la cobertura del seguro de arrendamiento, es decir, la garantía que la aseguradora haya avalado con referencia a los arrendamientos en mora, LA ADMINISTRADORA pagará hasta el último mes de tal cobertura y los meses subsiguientes que se llegaren a causar hasta la entrega del inmueble, cuando el arrendatario los haya pagado. 2.De llegar a presentarse circunstancias especiales de fuerza mayor o caso fortuito que llegaren a afectar el mercado y estas circunstancias lleven a la ADMINISTRADORA a un estado crítico de liquidez, podrá LA ADMINISTRADORA realizar los pagos a EL MANDANTE de manera vencida o contra recaudo. Tal decisión la informará oportunamente a EL MANDANTE.

    PARAGRAFO SEGUNDO. Cuando sea solicitada la terminación del contrato de arrendamiento por parte del arrendatario o del mandante, dentro de los términos legales o contractuales, el pago del último mes en que se encuentre vigente el contrato de ARRENDAMIENTO se hará de manera vencida. Pero si por decisión del MANDANTE, el Arrendatario está autorizado a entregar el inmueble antes del vencimiento del contrato, los pagos al MANDANTE serán de manera vencida a partir del mes en que sea confirmada dicha autorización. De la misma manera, si se inicia y tramita proceso de restitución de inmueble sea por solicitud del MANDANTE o por iniciativa de la ADMINISTRADORA, a partir del mes que inician las acciones, el pago a EL MANDANTE será en forma vencida.

    PARAGRAFO TERCERO. El incremento del canon de arrendamiento solo será reconocido a EL MANDANTE, cuando dicho incremento sea efectivamente aceptado y reconocido por el Arrendatario.
    PARAGRAFO CUARTO. LA ADMINISTRADORA realizará las gestiones judiciales y extrajudiciales necesarias para obtener la restitución del inmueble. Pero el costo de la restitución lo asumirá únicamente, cuando la causal invocada sea la mora. Para las demás causales, incluido el proceso de regulación de canon de arrendamiento establecido para definir judicialmente las condiciones de renovación de los contratos de inmuebles con destinación comercial, será por cuenta y riesgo del MANDANTE.

    CUARTA. OBLIGACIONES DEL MANDANTE. En adición a las especialmente señalado en este contrato, EL MANDANTE se obliga a lo siguiente a:

    1.	Entregar a LA ADMINISTRADORA el inmueble descrito en la cláusula primera del presente contrato, garantizando su buen estado de construcción (incluida la licencia) y de conservación para el uso y goce pleno de los arrendatarios y al día en los pagos de impuestos, servicios públicos domiciliarios, cuotas de administración y cualquier otro concepto que pueda llegar a afectar el contrato de arrendamiento.
    2.	Autorizar las reparaciones necesarias en el inmueble, en las oportunidades que se requiera para la conservación y el mantenimiento del mismo, evitando que la ADMINISTRADORA incurra en un incumplimiento del contrato de arrendamiento.
    3.	Suministrar a LA ADMINISTRADORA en forma fidedigna y oportuna, la información que se requiera en relación con el inmueble.
    4.	Restituir a LA ADMINISTRADORA las sumas de dinero que sin fundamento haya recibido de ésta con ocasión del presente contrato, dentro de los cinco (5) días hábiles siguientes a la fecha de la respectiva cuenta de cobro.
    5.	Comunicar a LA ADMINISTRADORA, tan pronto tenga conocimiento, cualquier hecho que pueda afectar el normal desarrollo de este contrato y de los contratos de arrendamiento que se celebren respecto del inmueble.
    6.	Reconocer y pagar a LA ADMINISTRADORA la remuneración por su gestión en la cuantía equivalente a 10 %, porcentaje que podrá aplica LA ADMINISTRADORA solo valor total de los ingresos mensuales obtenidos por concepto de canon, IVA y cuota de administración. También asumirá el IVA generado por dicha remuneración, dejando constancia que, la ADMINISTRADORA podrá deducirse estos conceptos directamente de los ingresos mensuales generados por el inmueble Administrado, con preferencia sobre cualquier otro gasto o concepto.
    
    7.	Asumir toda responsabilidad por causa de reclamación, juicio, devoluciones o indemnización que se originen en el régimen legal de arrendamientos o en caso de responsabilidad civil contractual por perjuicios que sobrevengan en razón, del mal estado del inmueble o en general ante cualquier evento que le sea imputable, salvo que estos se deban a deficiencias y/o errores debidamente comprobados en la gestión de LA ADMINISTRADORA, en cuyo caso serán de su responsabilidad.
    8.	Suministrar a la ADMINISTRADORA la documentación del inmueble donde se acrediten su condición de MANDANTE, la licencia de construcción y además suministrar el RUT (Registro Único Tributario) donde conste su tipo de Régimen Tributario.
    9.	Mantener al día las cuotas ordinarias de administración de tal manera que se pueda garantizar al ARRENDATARIO el uso y goce de las zonas comunes de la copropiedad, cuando el pago de dicho concepto esté a su cargo.
    10.	Respetar los términos y condiciones que la ADMINISTRADORA pacte en el contrato de arrendamiento y acogiéndose a lo que ley estatuye para la terminación del contrato de arrendamiento.
    11.	Las demás que se estipulen en el presente contrato y en la Ley.

    PARÁGRAFO PRIMERO. Los pagos efectuados por LA ADMINISTRADORA en nombre de EL MANDANTE en virtud de este contrato y de conformidad con los términos y condiciones establecidos en el mismo, podrán ser deducidos por LA ADMINISTRADORA del canon de arrendamiento respectivo.

    PARÁGRAFO SEGUNDO. Si el inmueble objeto de este contrato es “una casa con licencia de construcción residencial”, cuya destinación va a ser diferente a vivienda, EL MANDANTE deberá tener en cuenta que, si dicha destinación sea esta, comercial, industrial o de servicio, genera requerimientos de las autoridades competentes, que impliquen, reclasificación de la licencia de construcción y/o afectación en el impuesto predial, tramitará y asumirá dicho cambio o en su defecto, si así lo requiere el Arrendatario, aceptará una posible terminación anticipada del contrato de Arrendamiento, si las autoridades competentes llegasen a clausurar la actividad económica del Arrendatario, terminación que obra sin indemnización a cargo de ninguno de los afectados: Arrendatario, Administradora o Mandante.
    PARAGRAFO TERCERO. Si el inmueble objeto de este contrato es de aquellos donde el MANDANTE tiene suscrito un contrato de LEASING HABITACIONAL con una entidad financiera, el MANDANTE, se obligará a: a) Presentar a la ADMINISTRADORA la autorización emitida por dicha entidad, donde conste, que le han autorizado entregar el inmueble en Subarriendo, pues se entiende que el MANDANTE frente a la entidad financiera, ostenta la calidad de “Locatario (Arrendatario) y por ser el Locatario, está obligado a usar el inmueble directamente. La autorización de subarriendo así emitida permitirá a la ADMINISTRADORA obrar como Arrendadora y entregar el inmueble a un tercero. b) Cumplir con sus obligaciones ante la entidad financiera de tal manera que no se genere incumplimiento alguno que pueda acarrear acciones de dicha entidad tendientes a restituir el inmueble. De llegar a presentarse este tipo de incumplimientos y como consecuencia de ello, el titular del contrato de arrendamiento (subarrendatario) se vea afectado por tales acciones, será el aquí MANDANTE obligado a resarcirle al subarrendatario todo tipo de perjuicios ocasionados por causa o con ocasión de dicho incumplimiento, liberando a la ADMINISTRADORA de toda responsabilidad.


    QUINTA.  EXENCIÓN  DE  RESPONSABILIDAD.  LA  ADMINISTRADORA  no  será
    responsable ante EL MANDANTE del valor de las cuentas no pagadas por el arrendatario por concepto de la cuota de administración cuando no estuviere incluida en el canon de arrendamiento o no esté incluida en su responsabilidad. En ningún caso responderá por los deterioros o daños que el arrendatario o las personas a su cargo causen al bien arrendado, tampoco será de su responsabilidad el pago de los servicios públicos municipales dejados de cancelar por los arrendatarios, salvo que estén amparados dentro del seguro y/o fianza, pero, sí adelantará las gestiones extrajudiciales tendientes a obtener el reconocimiento y pago, de los mismos.
    
    SEXTA. DURACIÓN. Este contrato tendrá una vigencia igual a la del contrato de arrendamiento y estará sujeto las condiciones de prórroga y/o renovación de dicho contrato. La vigencia inicial acordada con el arrendatario es: XXXXX

    PARAGRAFO. Si en el desarrollo del presente contrato quedare en algún mes un saldo a cargo del MANDANTE y a favor de LA ADMINISTRADORA, este contrato se considerará prorrogado, aun cuando EL MANDANTE haya manifestado su deseo de darlo por terminado, hasta que dicho saldo a cargo del MANDANTE esté totalmente cubierto.
    SÉPTIMA. CAUSALES DE TERMINACIÓN. El presente contrato terminará por la ocurrencia de una o varias de las siguientes causales:
    1.	Por mutuo acuerdo entre las partes.
    2.	Por la decisión unilateral de una de las partes, quien en este evento deberá informar a la otra con un plazo no inferior a tres (3) meses anteriores a la fecha de vencimiento, su deseo de darlo por terminado.
    3.	Por decisión unilateral de parte del MANDANTE, a cualquier tiempo del contrato, evento para el cual el MANDANTE deberá notificar a la ADMINISTRADORA, con no menos treinta (30) días de antelación su decisión, teniendo en cuenta que, si al momento de terminación del contrato de administración hay respecto del inmueble de que trata este documento un contrato de arrendamiento vigente, EL MANDANTE está obligado a reconocer a LA ADMINISTRADORA la siguiente indemnización: 1. Si el contrato se encuentra en su primera vigencia, el valor que resulte mayor entre las comisión que habrá de corresponderle por los meses que faltaren para el vencimiento del contrato o un (1) canon de arrendamiento. 2. Si el contrato se encuentra prorrogado, EL MANDANTE pagará a LA ADMINISTRADORA las comisiones que faltaren hasta el respectivo vencimiento. El pago deberá realizarlo El MANDANTE de manera previa a la respectiva cesión del contrato de arrendamiento.
    4.	Por decisión unilateral de parte de la ADMINISTRADORA, a cualquier tiempo del contrato, evento para el cual la ADMINISTRADORA deberá notificar al MANDANTE con no menos treinta (30) días de antelación su decisión.
    5.	La demás que estipule la ley.

    PARÁGRAFO PRIMERO. En todo caso, ante el incumplimiento de cualquiera de las partes de alguna de las obligaciones contenidas en este contrato, la parte cumplida comunicará a la parte incumplida este hecho para que ésta proceda a remediar el incumplimiento dentro de los quince (15) días hábiles siguientes a dicha comunicación. Si no se procede a su remedio, se dará lugar a la terminación del contrato.

    PARAGRAFO SEGUNDO. En ningún evento podrá EL MANDANTE negociar de manera directa con el arrendatario los términos del contrato de arrendamiento especialmente la terminación. De llegar a hacerlo sin contar con aprobación previa del arrendador, deberá asumir los perjuicios que, con su actuar, le haya generado a LA ADMINISTRADORA.

    PARÁGRAFO TERCERO. Cuando la terminación del contrato de arrendamiento proceda de la voluntad del arrendatario y dicha terminación sea anticipada, sobre el valor que el arrendatario reconozca a título de indemnización, LA ADMINISTRADORA percibirá un porcentaje de dicha indemnización, así: a) Cuando el contrato se encuentre en su vigencia inicial, será el 50% y b) Si se encuentra en las prórrogas y/o renovaciones, el porcentaje será del 30%. El porcentaje correspondiente a LA ADMINISTRADORA será descontado del pago realizado por el arrendatario y del giro a EL MANDANTE. Ahora, si la terminación procede de la voluntad de EL MANDANTE, esto es, EL MANDANTE autoriza la entrega anticipada del inmueble a el arrendatario sin pago de indemnización alguna, LA ADMINISTRADORA tendrá derecho a reclamar a título de indemnización las comisiones faltantes para la terminación del contrato. Estas comisiones deberán ser asumidas por EL MANDANTE. El MANDANTE deberá realizar el pago antes de finiquitar el contrato de arrendamiento.
    OCTAVA. COMISION POR VENTA DEL INMUEBLE. Si por razón de la gestión desarrollada por LA ADMINISTRADORA, LOS ARRENDATARIOS resuelven adquirir el inmueble arrendado, EL MANDANTE Y/O EL PROPIETARIO, le reconocerá la Comisión
    
    generalmente aceptada por la intermediación en la compraventa correspondiente al tres por ciento (3%) del valor de la venta más el impuesto al valor agregado IVA sobre dicha comisión. Lo mismo se aplicará, si ARRENDATARIO y/o EL MANDANTE y/o EL PROPIETARIO, negociaren de manera directa la compraventa del inmueble.

    NOVENA. Para efectos de notificaciones y comunicaciones los siguientes son los datos:

    LA ADMINISTRADORA: CALLE 73 SUR 45 A 60 LOCAL 09. Teléfono: 4447362 - Correo
    Electrónico: administracion@somospropiedad.com.
    EL MANDANTE: XXXXXXXXXXXXXXXXX

    DECIMA. CONSENTIMIENTO EXPRESO. La persona(s), sea(n) esta(s) naturales o jurídicas que suscriben este contrato en calidad de MANDANTE, autoriza(n) expresamente a LA ADMINISTRADORA y a su eventual cesionario, para incorporar, reportar, procesar y consultar en bancos de datos, la información que se relacione con este contrato o que de él se derive durante la vigencia, del mismo, como al momento de su terminación. De la misma manera autoriza(n) a LA ADMINISTRADORA, su eventual cesionario o terceros vinculados a la actividad de LA ADMINISTRADORA, para que recolecte, administre y utilice sus datos personales, comerciales y financieros y los documentos anexos a este contrato, para los siguientes fines: a) actualización, consulta y reporte en centrales de información. b) Actividades de cobranza, c) proveedores, d) gestión del riesgo, e) campañas comerciales y de mercadeo sobre productos y/o servicios afines y medir el nivel de satisfacción respecto, de los mismos. Así mismo, declaro (amos) que conocemos los derechos inherentes a nuestros datos personales incluidos en la ley 1581 de 2012 y el decreto 1377 de 2013. La autorización sobre manejo de datos personales tendrá la duración que en su momento tenga el contrato de arrendamiento y/o diez años más. De igual modo, declaro haber sido informado de que puedo ejercitar los derechos de acceso, corrección, supresión, revocación o reclamo por infracción sobre mis datos, mediante escrito dirigido a SOMOS PROPOIEDAD SAS, a la dirección de correo electrónico administracion@somospropiedad.com., indicando en el asunto el derecho que desea ejercitar, o mediante correo ordinario remitido a CALLE 73 SUR 45 A 60 LOCAL 09.

    DECIMA PRIMERA. DECLARACIÓN ORIGEN DE FONDOS. (El) (LOS) (MANDANTE(S)
    declaramos que el bien (es) inmueble(s) objeto de este contrato fue(ron) adquirido(s) con recursos provenientes de actividades lícitas, de conformidad con la ley colombiana. De la misma manera, LA ADMINISTRADORA declara que los recursos invertidos y utilizados en su operación, provienen de actividades licitas. Las partes declaran que en ningún evento han incurrido en actividades que sean clasificadas como ilícitas en el Código Penal Colombiano y demás normas que lo adicionen o modifiquen.

    DECIMA SEGUNDA. CAUSALES ESPECIALES DE TERMINACIÓN DEL CONTRATO.
    Serán causales inmediatas de la terminación del contrato a favor de LA ADMINISTRADORA, las siguientes: 1. Cuando el (los) PROPIETARIO(S) se encuentren vinculados por parte de las autoridades competentes a cualquier tipo de investigación por delitos de narcotráfico, terrorismo, secuestro, lavado de activos, financiación, del terrorismo, administración de recursos relacionados con dichas actividades o en cualquier tipo de proceso judicial relacionado con la comisión de los anteriores delitos. 2. Cuando sean incluidos en listas para el control de lavados de activos y financiación del terrorismo administradas por cualquier autoridad nacional o extranjera, tales como la lista de la Oficina de Control de Activos en el Exterior - OFAC emitida por la oficina del Tesoro de los Estados Unidos de Norte América, la lista de la Organización de Las Naciones Unidas y otras listas públicas relacionadas con el tema de lavado de activos y financiación de Terrorismo. 3. Cuando el (los) PROPIETARIO(S) sean condenados por parte de las autoridades competentes en cualquier tipo de proceso judicial relacionado con la comisión de los anteriores delitos. 4. El incumplimiento de las normas ambientales o requerimiento de autoridades competentes, así como ser sancionados por dicho incumplimiento.
    ",
    // ... resto del contenido ...
];

// Agregar contenido al PDF con interlineado más pequeño
// Agregar contenido al PDF
foreach ($contenido as $index => $linea) {

    $pdf->SetFont('Arial', '', 11);
    $pdf->MultiCell(0, 4, utf8_decode($linea)); // Interlineado reducido a 5
    $pdf->Ln(1); // Espacio entre líneas reducido
}

// Salida del PDF
$pdf->Output('D', 'Contrato_de_Arriendo.pdf');
?>