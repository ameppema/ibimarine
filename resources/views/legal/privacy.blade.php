@extends('layout.template')

@section('title', __('Privacy Policy and Data Protection'))

@section('hero')
    <!-- Hero -->
    <section class="my-5">
        <div class="lg:mt-16 mt-4 border-y-4 border-old-gold py-1  lg:px-16 lg:mx-auto lg:w-max">
           <!-- <p class="text-center text-old-black text-2xl uppercase font-bold">{{__('Privacy Policy')}}</p> -->
           <p class="text-center text-old-black text-2xl uppercase font-bold">{{__('Privacy Policy and Data Protection')}}</p>
        </div>
    </section>
@endsection

@section('content')
<div class="text-xl container mx-auto lg:mx-auto lg:flex lg:flex-wrap w-4/5 lg:border-b-4 lg:border-b-old-gold">

<p class="mb-4">
    Ibimarine Charter & Maintenance S.L. se encuentra profundamente comprometido con el cumplimiento de la normativa española de protección de datos de carácter personal y es por ellos que cumple estrictamente con las directrices de la Ley Orgánica 15/1999 de 13 de diciembre de Protección de Datos de Carácter Personal, y con el Real Decreto 1720/2007 de 21 de diciembre por el que se aprueba el Reglamento de desarrollo de la Ley Orgánica y demás normativa vigente en cada momento, y vela por garantizar un correcto uso y tratamiento de los datos personales del usuario.
</p>

<p class="mb-4">
    Le informamos que los datos personales que la entidad pueda recogerle serán incorporado a los ficheros de Ibimarine Charter & Maintenance S.L. que se encuentran debidamente inscritos en el Registro General de la Agencia Española de Protección de Datos y que tiene como finalidad comunicación entre la empresa y sus clientes, usuarios, contactos o interesados en relación a nuestros productos o los servicios que prestamos, solicitudes de información, etc
</p>

<p class="mb-4">
    Los datos de carácter personal, serán tratados con el grado de protección adecuado, tomándose las medidas de seguridad legalmente necesarias para evitar su pérdida, deterioro y suministro y acceso a terceros no autorizados. Ello no obstante, el Usuario debe ser consciente de que las medidas de seguridad en Internet no son inexpugnables.
</p>

<p class="mb-4">
    Al margen de la relación contractual, el usuario autoriza a Ibimarine Charter & Maintenance S.L. al tratamiento de sus datos personales para el envío de ofertas comerciales y publicidad por cualquier medio (correspondencia, teléfono, fax, mailing o cualquier otro medio telemático) propio.
</p>

<p class="mb-4">
    Así mismo le informamos que podrá ejercer los derechos (ARCO) de acceso, rectificación, cancelación y oposición de los datos personales a los ficheros de Ibimarine Charter & Maintenance S.L. según lo dispuesto en la Ley Orgánica de Protección de Datos de Carácter Personal (L.O. 15/1999) y el RD. 1720/2007, dirigiendo una solicitud por escrito, junto con una copia del DNI a la siguiente dirección Puerto Deportivo Botafoch 302, CP 07800, Ibiza, o mediante el envío de un correo electrónico a: info@ibimarine.com
</p>

<p>
        DATOS FACILITADOS POR TERCEROS
</p>
<p class="mb-4">
    En caso de que en la solicitud se incluyeran datos de carácter personal, por personas no titulares de los mismos, el usuario deberá, con carácter previo a su inclusión, informar a dichas personas de los extremos contenidos en los párrafos anteriores. Ibimarine Charter & Maintenance S.L. se exime de cualquier responsabilidad por el incumplimiento de éste requisito.
</p>

<p>
        DATOS MENORES
</p>
<p class="mb-4">
    No está autorizado facilitar datos de personas menores de catorce años de edad a través de este Sitio Web. Ibimarine Charter & Maintenance S.L. se exime de cualquier responsabilidad por el incumplimiento de este requisito.
</p>

<p>
        COMUNICACIONES COMERCIALES POR MEDIOS ELECTRÓNICOS
</p>
<p class="mb-4">
    Las comunicaciones que se realicen por correo electrónico o por cualquier otro medio electrónico, serán las necesarias para gestionar su solicitud. No obstante, serán aquellas que hayan sido consentidas o autorizadas expresamente por los destinatarios de conformidad con la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico, salvo lo dispuesto por el artículo 21.2 de esta misma Ley, en la redacción dada por la Disposición Final Primera de la nueva Ley General de Telecomunicaciones.
</p>

<p>
        MEDIDAS DE SEGURIDAD
</p>
<p class="mb-4">
    El responsable del fichero ha adoptado los niveles de seguridad de protección de los Datos Personales legalmente requeridos, y ha instalado todos los medios y medidas técnicas a disposición según el estado de la tecnología para evitar la pérdida, mal uso, alteración, acceso no autorizado y robo de los Datos Personales facilitados.
</p>

<p>
        DEBER DE SECRETO
</p>
<p class="mb-4">
    El usuario cuenta con la confidencialidad y el deber de secreto de todos aquellos que traten los datos en nombre y por cuenta del mismo. Sin perjuicio de lo anterior, el usuario es consciente de la posibilidad de que la seguridad de las comunicaciones a través de red no sea invulnerable.
</p>
   
</div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection