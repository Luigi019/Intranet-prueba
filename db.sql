PGDMP     0                	    x            Intranet_V1    12.3    12.3 "    5           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            6           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            7           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            8           1262    17126    Intranet_V1    DATABASE     ?   CREATE DATABASE "Intranet_V1" WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';
    DROP DATABASE "Intranet_V1";
                postgres    false            ?            1259    17153    acceso    TABLE     i   CREATE TABLE public.acceso (
    idacceso integer NOT NULL,
    acceso character varying(20) NOT NULL
);
    DROP TABLE public.acceso;
       public         heap    postgres    false            ?            1259    17196    agenda    TABLE     0  CREATE TABLE public.agenda (
    idagenda integer NOT NULL,
    nombre character varying(60) NOT NULL,
    correo character varying(50) NOT NULL,
    oficina integer NOT NULL,
    tlf character varying(100) NOT NULL,
    apellido character varying(60) NOT NULL,
    estatus integer DEFAULT 1 NOT NULL
);
    DROP TABLE public.agenda;
       public         heap    postgres    false            ?            1259    17200    agenda_idagenda_seq    SEQUENCE     ?   CREATE SEQUENCE public.agenda_idagenda_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.agenda_idagenda_seq;
       public          postgres    false    209            9           0    0    agenda_idagenda_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.agenda_idagenda_seq OWNED BY public.agenda.idagenda;
          public          postgres    false    210            ?            1259    17191 
   estado_nac    TABLE     n   CREATE TABLE public.estado_nac (
    idnac integer NOT NULL,
    estado_nac character varying(50) NOT NULL
);
    DROP TABLE public.estado_nac;
       public         heap    postgres    false            ?            1259    17176    oficina    TABLE     l   CREATE TABLE public.oficina (
    idoficina integer NOT NULL,
    oficina character varying(45) NOT NULL
);
    DROP TABLE public.oficina;
       public         heap    postgres    false            ?            1259    17186    sexo    TABLE     c   CREATE TABLE public.sexo (
    idsexo integer NOT NULL,
    sexo character varying(10) NOT NULL
);
    DROP TABLE public.sexo;
       public         heap    postgres    false            ?            1259    17181    tipo_empleado    TABLE     t   CREATE TABLE public.tipo_empleado (
    idempleado integer NOT NULL,
    empleado character varying(20) NOT NULL
);
 !   DROP TABLE public.tipo_empleado;
       public         heap    postgres    false            ?            1259    17146    usuarios    TABLE     '  CREATE TABLE public.usuarios (
    idusuario integer NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    acceso integer NOT NULL,
    correo character varying(50) NOT NULL,
    clave character varying(50) NOT NULL,
    usuario character varying(50) NOT NULL,
    cedula character varying(10) NOT NULL,
    sexo integer NOT NULL,
    tlf character varying(14) NOT NULL,
    oficina integer NOT NULL,
    tipo_empleado integer NOT NULL,
    estado_nac integer NOT NULL,
    estatus integer DEFAULT 1
);
    DROP TABLE public.usuarios;
       public         heap    postgres    false            ?            1259    17144    usuarios_idusuario_seq    SEQUENCE     ?   CREATE SEQUENCE public.usuarios_idusuario_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.usuarios_idusuario_seq;
       public          postgres    false    203            :           0    0    usuarios_idusuario_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.usuarios_idusuario_seq OWNED BY public.usuarios.idusuario;
          public          postgres    false    202            ?
           2604    17202    agenda idagenda    DEFAULT     r   ALTER TABLE ONLY public.agenda ALTER COLUMN idagenda SET DEFAULT nextval('public.agenda_idagenda_seq'::regclass);
 >   ALTER TABLE public.agenda ALTER COLUMN idagenda DROP DEFAULT;
       public          postgres    false    210    209            ?
           2604    17149    usuarios idusuario    DEFAULT     x   ALTER TABLE ONLY public.usuarios ALTER COLUMN idusuario SET DEFAULT nextval('public.usuarios_idusuario_seq'::regclass);
 A   ALTER TABLE public.usuarios ALTER COLUMN idusuario DROP DEFAULT;
       public          postgres    false    203    202    203            ,          0    17153    acceso 
   TABLE DATA           2   COPY public.acceso (idacceso, acceso) FROM stdin;
    public          postgres    false    204   ?%       1          0    17196    agenda 
   TABLE DATA           [   COPY public.agenda (idagenda, nombre, correo, oficina, tlf, apellido, estatus) FROM stdin;
    public          postgres    false    209   K&       0          0    17191 
   estado_nac 
   TABLE DATA           7   COPY public.estado_nac (idnac, estado_nac) FROM stdin;
    public          postgres    false    208   ?&       -          0    17176    oficina 
   TABLE DATA           5   COPY public.oficina (idoficina, oficina) FROM stdin;
    public          postgres    false    205   ?'       /          0    17186    sexo 
   TABLE DATA           ,   COPY public.sexo (idsexo, sexo) FROM stdin;
    public          postgres    false    207   &(       .          0    17181    tipo_empleado 
   TABLE DATA           =   COPY public.tipo_empleado (idempleado, empleado) FROM stdin;
    public          postgres    false    206   W(       +          0    17146    usuarios 
   TABLE DATA           ?   COPY public.usuarios (idusuario, nombre, apellido, acceso, correo, clave, usuario, cedula, sexo, tlf, oficina, tipo_empleado, estado_nac, estatus) FROM stdin;
    public          postgres    false    203   ?(       ;           0    0    agenda_idagenda_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.agenda_idagenda_seq', 12, true);
          public          postgres    false    210            <           0    0    usuarios_idusuario_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.usuarios_idusuario_seq', 4, true);
          public          postgres    false    202            ?
           2606    17204    agenda agenda_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.agenda
    ADD CONSTRAINT agenda_pkey PRIMARY KEY (idagenda);
 <   ALTER TABLE ONLY public.agenda DROP CONSTRAINT agenda_pkey;
       public            postgres    false    209            ?
           2606    17195    estado_nac estado_nac_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.estado_nac
    ADD CONSTRAINT estado_nac_pkey PRIMARY KEY (idnac);
 D   ALTER TABLE ONLY public.estado_nac DROP CONSTRAINT estado_nac_pkey;
       public            postgres    false    208            ?
           2606    17180    oficina oficina_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.oficina
    ADD CONSTRAINT oficina_pkey PRIMARY KEY (idoficina);
 >   ALTER TABLE ONLY public.oficina DROP CONSTRAINT oficina_pkey;
       public            postgres    false    205            ?
           2606    17190    sexo sexo_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.sexo
    ADD CONSTRAINT sexo_pkey PRIMARY KEY (idsexo);
 8   ALTER TABLE ONLY public.sexo DROP CONSTRAINT sexo_pkey;
       public            postgres    false    207            ?
           2606    17185     tipo_empleado tipo-empleado_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.tipo_empleado
    ADD CONSTRAINT "tipo-empleado_pkey" PRIMARY KEY (idempleado);
 L   ALTER TABLE ONLY public.tipo_empleado DROP CONSTRAINT "tipo-empleado_pkey";
       public            postgres    false    206            ?
           2606    17157    acceso tipo_usuario_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.acceso
    ADD CONSTRAINT tipo_usuario_pkey PRIMARY KEY (idacceso);
 B   ALTER TABLE ONLY public.acceso DROP CONSTRAINT tipo_usuario_pkey;
       public            postgres    false    204            ?
           2606    17152    usuarios usuarios_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (idusuario);
 @   ALTER TABLE ONLY public.usuarios DROP CONSTRAINT usuarios_pkey;
       public            postgres    false    203            ?
           2606    17205    agenda fk-toficina-idoficina    FK CONSTRAINT     ?   ALTER TABLE ONLY public.agenda
    ADD CONSTRAINT "fk-toficina-idoficina" FOREIGN KEY (oficina) REFERENCES public.oficina(idoficina);
 H   ALTER TABLE ONLY public.agenda DROP CONSTRAINT "fk-toficina-idoficina";
       public          postgres    false    2722    209    205            ,   ?   x?3???OI-JL?/?2?tM?,2L8??S???S??r9\???)??y??%`?1y\1z\\\ V?
      1   =   x?34??K?M?t?H?-?Iu?M???K???4?40172?05352??I,.??3?????? ?Q?      0   ?   x??=N?@???S?(?v?Jǁ4!?D3٬?F???D"?qIA?|1&to?F?{?B?]?4f?J??^?c5S+?s???\?&???B?Kh?阎	WФ???װ?1SQ?Nhf?C??S?P2E4(???Cca'????k	?
DS?~??pR9?}`?nr??Q????_??z???
?gi?z??E?ַ38L??PZ?s?1??T????^5???
?$%?ֿ????;D???Z      -   ~   x?M?=
?P??????u???.!?????<?S?Ћ???g	??
?NC??H??SH?N??p?E?????)???????V[Iga??o????Ϭ6???????ޟn??????@??1?      /   !   x?3?tK?M?????2??M,N.??c???? |?      .   /   x?3???+I-???2??/RH??+)J,??2?H,N?q??qqq ?      +   ?   x???;?0???Oa???y4L,0????*i??ʯ'#?%K?l<?uK.??N???[?.(?Fu+=Ry????`??B ?p??
?}˩???i<Wjqs?=????j?p?15k?f??????%iF%???9!>?Z1     