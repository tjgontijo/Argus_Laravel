<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create( [
            
            'unit_teach_id'=>'1',
            'short_name'=>'CFO',
            'course_type_id'=>'1',
            'name'=>'Curso de Formação de Oficiais',
            'description'=>'Formar ao final de três anos de curso o Aspirante a Oficial Policial Militar, Bacharel em Ciências Policiais, capacitando-o nas atividades de gerenciamento em segurança pública possibilitando o desenvolvimento de competências para tomadas de decisões, preservação dos direitos humanos, princípio da administração pública, em gestão voltada para a qualidade dos serviços prestados à comunidade.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'2',
            'short_name'=>'CAE',
            'course_type_id'=>'1',
            'name'=>'Curso de Altos Estudos para Oficiais',
            'description'=>'Preparar os oficiais superiores com conhecimentos e técnicas para o exercício dos diversos cargos e funções de Comando da Corporação, bem como habilitar os oficiais ao posto de Coronel.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'1',
            'short_name'=>'CHOSC',
            'course_type_id'=>'1',
            'name'=>'Curso de Habilitação de Oficiais de Saúde e Capelães',
            'description'=>'Habilitar oficial(is) especialista(s) da área de saúde e o oficial capelão, aprovado(s) em concurso público, para o exercício das funções inerentes ao Oficialato Policial Militar no que tange ao Quadro de Oficiais Policiais Militares de Saúde (QOPMS) e Quadro de Oficiais Policiais Militares Capelães (QOPMC).',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'1',
            'short_name'=>'CHOAEM',
            'course_type_id'=>'1',
            'name'=>'Curso de Habilitação de Oficiais Administrativos, Especialistas e Músicos',
            'description'=>'Habilitar as praças graduados para o exercício do cargo de oficial subalterno e intermediário do Quadro de Oficiais Militares Administrativos (QOPMA) e Especialistas (QOPME) da Polícia Militar do Distrito Federal, com o desenvolvimento de princípios éticos e aprimoramento físico e intelectual! possibilitando aos mesmos o pleno desempenho das funções e atribuições inerentes aos respectivos cargos',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'2',
            'short_name'=>'CAEP',
            'course_type_id'=>'1',
            'name'=>'Curso de Altos Estudos para Praças',
            'description'=>'Aperfeiçoar os Subtenentes e os Primeiros Sargentos, dentro dos respectivos Quadros da Corporação, para o exercício das funções inerentes à graduação de Subtenente.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'2',
            'short_name'=>'CAP',
            'course_type_id'=>'1',
            'name'=>'Curso de Aperfeiçoamento de Praças',
            'description'=>'Aperfeiçoar os Terceiros e Segundos Sargentos, que não possuírem o curso, de todos os Quadros da Corporação, habilitando-os ao exercício das funções inerentes à graduação de Segundo Sargento, bem como, o acesso às graduações de Segundo e Primeiro Sargento.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'1',
            'short_name'=>'CFP',
            'course_type_id'=>'1',
            'name'=>'Curso de Formação de Praças',
            'description'=>'Formar Praças PM com competências, habilidades e atitude profissionais necessárias ao desempenho da atividade policial militar nas diversas tarefas atribuídas à Polícia Militar do Distrito Federal, visando a preservação da ordem pública e a promoção e garantia dos direitos humanos, bem como à execução de outros serviços previstos em leis, regulamentos e normas.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'1',
            'short_name'=>'CSTSP',
            'course_type_id'=>'1',
            'name'=>'Curso Superior de Tecnologia em Segurança Pública',
            'description'=>'Formar profissionais aptos a exercerem atividades correlacionadas à área da segurança pública, atuantes na gestão da segurança e ordem pública em nível de graduação',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'1',
            'short_name'=>'CSTPG',
            'course_type_id'=>'1',
            'name'=>'Curso Superior de Tecnologia em Processos Gerenciais',
            'description'=>'Graduar profissionais na área da gestão que tenham habilidades para atuar nas áreas de planejamento, organização, direção e controle, gerindo pessoas, recursos e processos, conscientes de seu papel na estrutura organizacional bem como na sociedade, integrados com a pesquisa e o desenvolvimento científico.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CPGLSISP',
            'course_type_id'=>'1',
            'name'=>'Curso de Pós-Graduação Lato Sensu de Inteligência em Segurança Pública',
            'description'=>'Qualificar policiais militares e servidores de órgãos públicos, possuidores de nível superior, sendo tecnólogos, licenciados e/ou bacharéis, preferencialmente com vínculo com a atividade de inteligência de segurança pública, desenvolvendo nos discentes o senso crítico e analítico sobre diversos temas relacionados à prospecção de cenários de criminalidade e assuntos correlatos à Segurança Pública.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'PPA',
            'course_type_id'=>'1',
            'name'=>'Curso de Piloto Privado de Avião',
            'description'=>'Habilitar o oficial PM a exercer a função de copiloto de aeronave de asa fixa da Corporação.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CTOp Aéreo',
            'course_type_id'=>'1',
            'name'=>'Curso de Tripulante Operacional',
            'description'=>'Especializar policial militar para atuar na função de tripulante de aeronave da Corporação.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CAV',
            'course_type_id'=>'1',
            'name'=>'Curso de Auxiliar Veterinário',
            'description'=>'Dotar o policial militar dos conhecimentos e habilidades necessários ao desempenho da função de auxiliar veterinário de equinos.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CASOp',
            'course_type_id'=>'1',
            'name'=>'Curso de Apoio Solo Operacional',
            'description'=>'Capacitar o policial militar para exercer atividades inerentes ao solo em apoio a aeronaves.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CPP NO',
            'course_type_id'=>'1',
            'name'=>'Curso de Pilotagem Policial',
            'description'=>'Capacitar a praça PM a conduzir uma viatura operacional de modo eficiente e seguro, mesmo em condições adversas e em diferentes tipos de terreno e situações.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CMPM',
            'course_type_id'=>'1',
            'name'=>'Curso de Motociclista Policial Militar',
            'description'=>'Capacitar o policial militar no motopatrulhamento de área, bem como à realização de escoltas.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CTE',
            'course_type_id'=>'1',
            'name'=>'Curso de Técnico-Explosivista',
            'description'=>'Especializar policiais militares em atendimento de ocorrências envolvendo ameaças e localização de artefatos explosivos, bem como dotá-los de conhecimentos técnicos sobre explosivos na atividade policial, devidamente previstos e conceituados na Portaria 065/SSP-DF/2014, instruindo-os ainda, na operacionalização da tomada de decisões em ocorrências com artefatos explosivos e no uso de explosivos em Ações Táticas.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CPO',
            'course_type_id'=>'1',
            'name'=>'Curso de Paraquedismo Operacional',
            'description'=>'Capacitar policiais militares para o desempenho de missões de infiltração de alto risco em terrenos de difícil acesso no Distrito Federal e em todo território nacional que exijam especializações e doutrinas às atividades de paraquedismo.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CTC',
            'course_type_id'=>'1',
            'name'=>'Curso de Tiro de Combate',
            'description'=>'Capacitar e aperfeiçoar policiais militares no emprego adequado de técnicas e táticas de tiro de combate.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CTOP',
            'course_type_id'=>'1',
            'name'=>'Curso Tático Operacional',
            'description'=>'Especializar policiais militares para o emprego no Patrulhamento Tático Operacional, a ser exercido pelas Unidades Policiais com responsabilidade de área',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CBIAMT',
            'course_type_id'=>'1',
            'name'=>'Curso Básico de Instrutor de Amamento, Munição e Tiro',
            'description'=>'Dotar o policial militar com os conhecimentos e habilidades básicos, além de formar atitudes favoráveis, necessários para o exercício da função de instrutor de tiro da Corporação.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CAIAMT',
            'course_type_id'=>'1',
            'name'=>'Curso Avançado de Instrutor de Armamento, Munição e Tiro',
            'description'=>'Complementar os conhecimentos e habilidades do policial militar, além de formar atitudes favoráveis, necessários para o exercício da função de instrutor de tiro da Corporação, relativamente a armamento não abrangido pelo Curso Básico.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CPP NIM',
            'course_type_id'=>'1',
            'name'=>'Curso de Pilotagem Policial - Nível Instrutor/ Monitor',
            'description'=>'Capacitar a aperfeiçoar o Policial Militar para exercer de forma adequada e técnica a função de instrutor ou monitor de instrução no âmbito dos Cursos de Pilotagem Policial da Corporação.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CC',
            'course_type_id'=>'1',
            'name'=>'Curso de Cinotecnia',
            'description'=>'Especializar os policiais militares para atuarem no policiamento com cães no âmbito do DF.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CBC',
            'course_type_id'=>'1',
            'name'=>'Curso de Busca e Captura',
            'description'=>'Especializar o policial militar para a formação e condução de cães especializados na busca e captura de suspeitos em locais de difícil acesso, áreas e congêneres.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'COQ',
            'course_type_id'=>'1',
            'name'=>'Curso de Operações Químicas',
            'description'=>'Capacitar o policial militar para uso de instrumentos, equipamentos, armamentos e técnicas de uso diferenciado da força.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CO Choque',
            'course_type_id'=>'1',
            'name'=>'Curso de Operações de Choque',
            'description'=>'Capacitar o policial militar para atuar no restabelecimento da ordem pública nos casos que houver grave perturbação da ordem em que se esgote a capacidade operativa da tropa ordinária.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'PATAMO',
            'course_type_id'=>'1',
            'name'=>'Curso de Patrulhamento Tático Móvel',
            'description'=>'Capacitar o policial militar para executar o Policiamento Ostensivo Especializado de Choque, em seus tipos e modalidades específicas, com base na doutrina de Patrulhamento Tático Móvel, adotada na Unidade e no respeito aos Direitos Humanos e Fundamentais consolidados na legislação vigente.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CTA',
            'course_type_id'=>'1',
            'name'=>'Curso Tático Ambiental',
            'description'=>'Proporcionar conhecimentos, experiências, habilidades de forma a capacitar o policial ambiental a atuar adequadamente conforme doutrina do Grupo Tático Ambiental.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'COC',
            'course_type_id'=>'1',
            'name'=>'Curso de Operações do Cerrado',
            'description'=>'Proporcionar conhecimentos, experiências, habilidades e formar atitudes favoráveis que capacitem o policial militar a desempenhar as mais diversas tarefas atinentes ao policiamento ambiental no Cerrado.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CPM',
            'course_type_id'=>'1',
            'name'=>'Curso de Policiamento Montado',
            'description'=>'Capacitar os policiais militares para o desempenho de atividades de Policiamento Ostensivo na modalidade Montado.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CCM',
            'course_type_id'=>'1',
            'name'=>'Curso de Choque Montado',
            'description'=>'Capacitar os policiais militares de condições técnicas profissionais para atuarem em operações de controle de distúrbios civis a cavalo.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CIP',
            'course_type_id'=>'1',
            'name'=>'Curso de Inteligência Policial',
            'description'=>'Especializar o policial militar integrante do SIPOM para atuar na atividade de inteligência.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'SEGOR',
            'course_type_id'=>'1',
            'name'=>'Curso de Segurança Orgânica',
            'description'=>'Especializar o policial militar integrante do SIPOM para desenvolver um plano de segurança orgânica.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CPC',
            'course_type_id'=>'1',
            'name'=>'Curso de Produção de Conhecimento',
            'description'=>'Especializar o policial militar integrante do SIPOM a fim de produzir documentos de inteligência.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CE',
            'course_type_id'=>'1',
            'name'=>'Curso de Entrevista',
            'description'=>'Especializar o policial militar integrante do SIPOM para utilizar a ação de busca denominada entrevista.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'COI',
            'course_type_id'=>'1',
            'name'=>'Curso de Operações de Inteligência',
            'description'=>'Especializar o policial militar integrante do SIPOM a desenvolver operações de inteligência.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CCI',
            'course_type_id'=>'1',
            'name'=>'Curso de Contrainteligência',
            'description'=>'Capacitar integrantes do SIPOM e de sistemas congêneres pertencentes a outros órgãos públicos a aprimorarem os conhecimentos relativos ao processo de salvaguarda e proteção a assuntos de caráter sigilosos, de interesse do Estado e da sociedade.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CCS',
            'course_type_id'=>'1',
            'name'=>'Curso de Comunicação Social',
            'description'=>'Especializar o policial militar a planejar, organizar e controlar a divulgação de peças publicitárias, determinando os meios e veículos de comunicação a serem utilizados e a melhor forma de atingir o público-alvo, além de capacitá-lo em Assessoria de Imprensa.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CEAV',
            'course_type_id'=>'1',
            'name'=>'Curso de Edição de Áudio e Vídeo',
            'description'=>'Especializar o Policial Militar na edição de imagens e áudios que circulam nas redes sociais e nas grandes redes televisivas.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'COI',
            'course_type_id'=>'1',
            'name'=>'Curso de Oratória Institucional',
            'description'=>'Especializar policiais militares para atuarem como Mestre de Cerimônia em eventos que a Instituição esteja inserida.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CFI PROERD',
            'course_type_id'=>'1',
            'name'=>'Curso de Formação de Instrutores PROERD',
            'description'=>'Selecionar policiais e capacitá-los para desempenhar funções de Instrutor PROERD referente aos currículos de Educação Infantil e Séries Iniciais, 5º e 7º do Ensino Fundamental.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'PROVID',
            'course_type_id'=>'1',
            'name'=>'Curso de Policiamento de Prevenção Orientado a Violência Doméstica',
            'description'=>'Definir e regulamentar as condições de funcionamento, o regime acadêmico e as atribuições e obrigações a serem obedecidas pelos elementos subordinados.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CDH NM',
            'course_type_id'=>'1',
            'name'=>'Curso de Direitos Humanos – Nível Multiplicador',
            'description'=>'Capacitar os profissionais como multiplicadores para difundir a informação orientada sobre o entendimento comum das temáticas Direitos Humanos e Dignidade da Pessoa Humana, através da apresentação de uma referência ético-legal para uma perspectiva profissional e atitudinal.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CTA',
            'course_type_id'=>'1',
            'name'=>'Curso para Capacitação de Tutores e Corpo Técnico-Administrativo do Ambiente Virtual de Aprendizagem do ISCP (ISCP-Virtual)',
            'description'=>'Preparar os policiais militares envolvidos com as atividades administrativas realizadas no ambiente virtual de aprendizagem (AVA) do ISCP/Virtual.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CCDC',
            'course_type_id'=>'1',
            'name'=>'Curso para Capacitação de Docentes e Conteudistas para a Educação a Distância',
            'description'=>'Preparar os policiais militares para atuarem como conteudistas e docentes no ambiente virtual de aprendizagem (AVA) do ISCP- Virtual.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CEInf',
            'course_type_id'=>'1',
            'name'=>'Curso de Extensão de Informática Instrumental',
            'description'=>'Capacitar e instrumentalizar alunos e comunidade acadêmica com as noções elementares do uso e dos recursos do computador. Introduzir noções básicas de um editor de texto, de planilhas eletrônicas e recursos computacionais necessários ao mundo do trabalho e à vida acadêmica.',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            Course::create( [
            
            'unit_teach_id'=>'3',
            'short_name'=>'CEIng',
            'course_type_id'=>'1',
            'name'=>'Curso de Extensão de Inglês Instrumental',
            'description'=>'Desenvolver a prática de estratégias de comunicação e de compreensão da leitura e escrita que favoreçam a atuação do profissional da área de segurança pública',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );    
        
    }
}
