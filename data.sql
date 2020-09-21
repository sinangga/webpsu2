--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.10
-- Dumped by pg_dump version 9.6.10

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: buletin; Type: TABLE; Schema: public; Owner: 
--

CREATE TABLE public.buletin (
    id_buletin integer,
    bln_buletin character varying(15) DEFAULT NULL::character varying,
    gbr_buletin character varying(47) DEFAULT NULL::character varying,
    file_buletin character varying(30) DEFAULT NULL::character varying
);


ALTER TABLE public.buletin OWNER TO  ;

--
-- Name: kritik_saran; Type: TABLE; Schema: public; Owner: 
--

CREATE TABLE public.kritik_saran (
    id_kritiksaran integer,
    nama_kritiksaran character varying(4) DEFAULT NULL::character varying,
    email_kritiksaran character varying(16) DEFAULT NULL::character varying,
    pesan_kritiksaran character varying(4) DEFAULT NULL::character varying
);


ALTER TABLE public.kritik_saran OWNER TO  ;

--
-- Name: pengguna; Type: TABLE; Schema: public; Owner:  
--

CREATE TABLE public.pengguna (
    id_pengguna integer,
    nama_pengguna character varying(15) DEFAULT NULL::character varying,
    username_pengguna character varying(6) DEFAULT NULL::character varying,
    password_pengguna integer
);


ALTER TABLE public.pengguna OWNER TO  ;

--
-- Name: potensi_karhutla; Type: TABLE; Schema: public; Owner:  
--

CREATE TABLE public.potensi_karhutla (
    id_potensikarhutla integer,
    namafile character varying(17) DEFAULT NULL::character varying,
    gbr_potensikarhutla character varying(39) DEFAULT NULL::character varying
);


ALTER TABLE public.potensi_karhutla OWNER TO  ;

--
-- Name: pracu_3harian; Type: TABLE; Schema: public; Owner:  
--

CREATE TABLE public.pracu_3harian (
    id_pracu3harian integer,
    namafile character varying(16) DEFAULT NULL::character varying,
    gbr_pracu3harian character varying(41) DEFAULT NULL::character varying
);


ALTER TABLE public.pracu_3harian OWNER TO  ;

--
-- Name: pracu_harian; Type: TABLE; Schema: public; Owner:  
--

CREATE TABLE public.pracu_harian (
    id_pracuharian integer,
    namafile character varying(15) DEFAULT NULL::character varying,
    gbr_pracuharian character varying(41) DEFAULT NULL::character varying
);


ALTER TABLE public.pracu_harian OWNER TO  ;

--
-- Name: pracu_kalbar; Type: TABLE; Schema: public; Owner:  
--

CREATE TABLE public.pracu_kalbar (
    id_pracukalbar integer,
    namafile character varying(21) DEFAULT NULL::character varying,
    gbr_pracukalbar character varying(47) DEFAULT NULL::character varying
);


ALTER TABLE public.pracu_kalbar OWNER TO  ;

--
-- Name: pracu_mingguan; Type: TABLE; Schema: public; Owner:  
--

CREATE TABLE public.pracu_mingguan (
    id_pracumingguan integer,
    namafile character varying(17) DEFAULT NULL::character varying,
    gbr_pracumingguan character varying(45) DEFAULT NULL::character varying
);


ALTER TABLE public.pracu_mingguan OWNER TO  ;

--
-- Name: sebaran_hotspot; Type: TABLE; Schema: public; Owner:  
--

CREATE TABLE public.sebaran_hotspot (
    id_sebaranhotspot integer,
    namafile character varying(16) DEFAULT NULL::character varying,
    gbr_sebaranhotspot character varying(38) DEFAULT NULL::character varying
);


ALTER TABLE public.sebaran_hotspot OWNER TO  ;

--
-- Data for Name: buletin; Type: TABLE DATA; Schema: public; Owner:  
--

COPY public.buletin (id_buletin, bln_buletin, gbr_buletin, file_buletin) FROM stdin;
1	Agustus 2020	img/buletin/8.jpeg	bulet/Pangsuma_agustus2020.pdf
2	 September-2020	pengelola/coverbltn/buletin- September-2020.jpg	
3	 Agustus-2020	pengelola/coverbltn/buletin- Agustus-2020.png	
4	 Juli 2020	pengelola/coverbltn/buletin- Juli 2020.jpg	NULL
5	 JUNI-2020	pengelola/coverbltn/buletin- JUNI-2020.jpg	NULL
6	 September-2020	pengelola/coverbltn/buletin- September-2020.png	NULL
7	tes	pengelola/coverbltn/buletin-tes.png	NULL
\.


--
-- Data for Name: ritik_saran; Type: TABLE DATA; Schema: public; Owner:  
--

COPY public.kritik_saran (id_kritiksaran, nama_kritiksaran, email_kritiksaran, pesan_kritiksaran) FROM stdin;
1	dewi	dewi88@gmail.com	okee
2	yaya	yaya@gmail.com	t
\.


--
-- Data for Name: pengguna; Type: TABLE DATA; Schema: public; Owner:  
--

COPY public.pengguna (id_pengguna, nama_pengguna, username_pengguna, password_pengguna) FROM stdin;
1	Pebriyanti 	pebyan 70298
2	Sinangga yudi 0
\.


--
-- Data for Name: potensi_karhutla; Type: TABLE DATA; Schema: public; Owner:  
--

COPY public.potensi_karhutla (id_potensikarhutla, namafile, gbr_potensikarhutla) FROM stdin;
1	2020-09-16	img/hs/potensikarhutla_16sept.jpeg
8	karhutla-20200920	pengelola/potensi/karhutla-20200920.jpg
\.


--
-- Data for Name: pracu_3harian; Type: TABLE DATA; Schema: public; Owner:  
--

COPY public.pracu_3harian (id_pracu3harian, namafile, gbr_pracu3harian) FROM stdin;
2	3harian-20200919	pengelola/pracu3hari/3harian-20200919.jpg
\.


--
-- Data for Name: pracu_harian; Type: TABLE DATA; Schema: public; Owner:  
--

COPY public.pracu_harian (id_pracuharian, namafile, gbr_pracuharian) FROM stdin;
1	harian-20200919	pengelola/pracuharian/harian-20200919.jpg
\.


--
-- Data for Name: pracu_kalbar; Type: TABLE DATA; Schema: public; Owner:  
--

COPY public.pracu_kalbar (id_pracukalbar, namafile, gbr_pracukalbar) FROM stdin;
1	2020-09-16	img/pracu/pracu16sept.jpeg
2	2020-09-17	img/pracu/pracu17sept.jpeg
6	hariankalbar-20200919	pengelola/pracukalbar/hariankalbar-20200919.jpg
\.


--
-- Data for Name: pracu_mingguan; Type: TABLE DATA; Schema: public; Owner:  
--

COPY public.pracu_mingguan (id_pracumingguan, namafile, gbr_pracumingguan) FROM stdin;
1	2020-09-13	img/pracu/pracumingguan_13sept.jpeg
2	mingguan-20200920	pengelola/pracumingguan/mingguan-20200920.jpg
\.


--
-- Data for Name: sebaran_hotspot; Type: TABLE DATA; Schema: public; Owner:  
--

COPY public.sebaran_hotspot (id_sebaranhotspot, namafile, gbr_sebaranhotspot) FROM stdin;
1	2020-09-16	img/hs/sebaranhs_16sept.jpeg
2	hotspot-20200920	pengelola/sebaran/hotspot-20200920.jpg
\.


--
-- PostgreSQL database dump complete
--

