 <?php
 
 use App\Models\Admin\CourseRelease;
 use Illuminate\Database\Seeder;
 
 class CourseReleasesTableSeeder extends Seeder
 {
     /**
      * Run the database seeds.
      *
      * @return void
      */
     public function run()
     {
         CourseRelease::create( [
             'id'=>'1',
             'course_id'=>'1',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-01-01',             
             'date_schedule_end'=>'2018-07-30',
             'level' => 'Oficial',
             'vacancies'=>'100',
             'duration'=>'200',
             'workload'=>'1510',
             'requeriments'=>'Conforme critérios de seleção definidos pelo Comando da PMDF nos editais relativos ao concurso público.',
             'regime'=>'Presencial conforme Projeto Pedagógico do Curso (até 20% da carga horária em EaD).',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'2',
             'course_id'=>'1',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-08-01',
             
             'date_schedule_end'=>'2018-12-31',
             'level' => 'Oficial',
             'vacancies'=>'100',
             'duration'=>'200',
             'workload'=>'1510',
             'requeriments'=>'Conforme critérios de seleção definidos pelo Comando da PMDF nos editais relativos ao concurso público.',
             'regime'=>'Presencial conforme Projeto Pedagógico do Curso (até 20% da carga horária em EaD).',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'3',
             'course_id'=>'2',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-07-01',
             
             'date_schedule_end'=>'2019-05-31',
             'level' => 'Oficial',
             'vacancies'=>'50',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Conforme critérios de seleção definidos pelo Comando da PMDF nos editais relativos ao concurso público.',
             'regime'=>'Parcialmente na modalidade de EaD. Oito meses na modalidade de EAD e dois meses na modalidade presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
            'id'=>'4',
            'course_id'=>'3',
            'status_release_id'=>'1',

            'level'=>'Oficial',
            'duration'=>'100',
            'workload'=>'760',
            'requeriments'=>'Conforme critérios de seleção definidos pelo Comando da PMDF nos editais relativos ao concurso público.',
            'regime'=>'Presencial e período integral conforme plano de curso',
            'observation'=>'',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
             
             CourseRelease::create( [
             'id'=>'5',
             'course_id'=>'4',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-01-01',
             
             'date_schedule_end'=>'2018-07-30',
             'level'=>'Praça',
             'vacancies'=>'150',
             'duration'=>'100',
             'workload'=>'715',
             'requeriments'=>'Conforme critérios de seleção definidos pelo Comando da PMDF nos editais relativos ao concurso público.',
             'regime'=>'Presencial e em período integral consoante plano de curso.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'6',
             'course_id'=>'5',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-06-01',
             
             'date_schedule_end'=>'2018-10-30',
             'level'=>'Praça',
             'vacancies'=>'500',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Ser Subtenente ou Primeiro Sargento de acordo com a antiguidade referente à última data de promoção na graduação e dentro do respectivo Quadro na Corporação.',
             'regime'=>'Parcialmente na modalidade de EaD.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'7',
             'course_id'=>'6',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-02-16',
             
             'date_schedule_end'=>'2018-08-30',
             'level'=>'Praça',
             'vacancies'=>'500',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Ser Terceiro e Segundo Sargento sem o referido curso de todos os Quadros da Corporação.',
             'regime'=>'Parcialmente na modalidade de EaD.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'8',
             'course_id'=>'6',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-05-30',
             
             'date_schedule_end'=>'2018-11-20',
             'level'=>'Praça',
             'vacancies'=>'500',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Ser Terceiro e Segundo Sargento sem o referido curso de todos os Quadros da Corporação.',
             'regime'=>'Parcialmente na modalidade de EaD.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
            
             
             CourseRelease::create( [
             'id'=>'10',
             'course_id'=>'8',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-01-01',
             
             'date_schedule_end'=>'2018-07-30',
             'level'=>'Misto',
             
             'duration'=>'100',
             'workload'=>'415',
             'requeriments'=>'Ser profissional da área de segurança pública aprovado em processo seletivo do DEC/ISCP e conforme disponibilidade de vaga.',
             'regime'=>'Presencial no período noturno e eventualmente aos sábados pela manhã e tarde',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'11',
             'course_id'=>'8',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-08-01',
             
             'date_schedule_end'=>'2018-12-30',
             'level'=>'Misto',
             
             'duration'=>'100',
             'workload'=>'415',
             'requeriments'=>'Ser profissional da área de segurança pública aprovado em processo seletivo do DEC/ISCP e conforme disponibilidade de vaga.',
             'regime'=>'Presencial no período noturno e eventualmente aos sábados pela manhã e tarde',
             'observation'=>'',
             'created_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'12',
             'course_id'=>'9',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-02-01',
             
             'date_schedule_end'=>'2018-07-30',
             'level'=>'Misto',
             
             'duration'=>'200',
             'workload'=>'840',
             'requeriments'=>'',
             'regime'=>'a modalidade de Educação a Distância com avaliações (provas) presenciais.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'13',
             'course_id'=>'9',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-01-08',
             
             'date_schedule_end'=>'2018-07-30',
             'level'=>'Misto',
             
             'duration'=>'200',
             'workload'=>'840',
             'requeriments'=>'',
             'regime'=>'a modalidade de Educação a Distância com avaliações (provas) presenciais.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
            'id'=>'14',
            'course_id'=>'10',
            'status_release_id'=>'1',
            'level'=>'Misto',
            'vacancies'=>'40',
            'duration'=>'215',
            'workload'=>'420',
            'requeriments'=>'Conforme edital normativo.',
            'regime'=>'Presencial.',
            'observation'=>'',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
                
            CourseRelease::create( [
            'id'=>'15',
            'course_id'=>'11',
            'status_release_id'=>'1',
            'level'=>'Oficial',
            'vacancies'=>'2',
            'duration'=>'',
            'workload'=>'',
            'requeriments'=>'Ser Oficial QOPM até o posto de capitão com no mínimo 2 anos desde a conclusão do curso inicial de carreira e no máximo 10 anos de serviços prestados na PMDF possuir CMA 1ª Classe.',
            'regime'=>'Presencial.',
            'observation'=>'',
            'created_at'=>now(),
            'updated_at'=>now()
            ] );       
             
             CourseRelease::create( [
             'id'=>'16',
             'course_id'=>'12',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-04-02',
             
             'date_schedule_end'=>'2018-05-18',
             'level'=>'Praça',
             'vacancies'=>'30',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Ser praça QPPMC e possuir CMA categoria OEE.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'17',
             'course_id'=>'13',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-08-06',
             
             'date_schedule_end'=>'2018-09-28',
             'level'=>'Praça',
             'vacancies'=>'15',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Ser Cabo Sargento ou Subtenente todos do QPPMC.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'18',
             'course_id'=>'14',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-06-08',
             
             'date_schedule_end'=>'2018-07-03',
             'level'=>'Praça',
             'vacancies'=>'20',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Ser praça do QPPMC e possuir carteira de habilitação na categoria B.',
             'regime'=>'Presencial',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'19',
             'course_id'=>'15',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-10-22',
             
             'date_schedule_end'=>'2018-11-26',
             'level'=>'Praça',
             'vacancies'=>'25',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Possuir Carteira Nacional de Habilitação de categoria B.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'20',
             'course_id'=>'17',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-08-27',
             
             'date_schedule_end'=>'2018-12-07',
             'level'=>'Misto',
             'vacancies'=>'20',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Ter no máximo 25 anos de efetivo serviço policial militar',
             'regime'=>'Ser aprovado em exame escrito.',
             'observation'=>'Presencial.',
             'created_at'=>now(),
             'updated_at'=>now()
             
             ] );
             
             CourseRelease::create( [
             'id'=>'21',
             'course_id'=>'18',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-07-12',
             
             'date_schedule_end'=>'2018-08-03',
             'level'=>'Misto',
             'vacancies'=>'12',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'22',
             'course_id'=>'20',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-04-02',
             
             'date_schedule_end'=>'2018-06-05',
             'level'=>'Misto',
             'vacancies'=>'40',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'23',
             'course_id'=>'21',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-06-18',
             
             'date_schedule_end'=>'2018-07-26',
             'level'=>'Misto',
             'vacancies'=>'20',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'24',
             'course_id'=>'21',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-08-13',
             
             'date_schedule_end'=>'2018-09-21',
             'level'=>'Misto',
             'vacancies'=>'20',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'25',
             'course_id'=>'22',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-10-15',
             
             'date_schedule_end'=>'2018-12-05',
             'level'=>'Misto',
             'vacancies'=>'33',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Ter feito o Curso Básico de Instrutor de Armamento Munição e Tiro.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'26',
             'course_id'=>'23',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-02-19',
             
             'date_schedule_end'=>'2018-03-19',
             'level'=>'Misto',
             'vacancies'=>'30',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Ser Oficial QOPM ou praça a partir da graduação de 3º Sargento QPPMC.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'27',
             'course_id'=>'25',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-04-09',
             
             'date_schedule_end'=>'2018-05-24',
             'level'=>'Misto',
             'vacancies'=>'14',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Ser Oficial QOPM ou Praça QPPMC. Ter curso de cinotecnia ou equivalente.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'28',
             'course_id'=>'28',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-02-19',
             
             'date_schedule_end'=>'2018-04-23',
             'level'=>'Misto',
             'vacancies'=>'40',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'29',
             'course_id'=>'29',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-10-01',
             
             'date_schedule_end'=>'2018-11-16',
             'level'=>'Misto',
             'vacancies'=>'40',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'30',
             'course_id'=>'30',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-05-28',
             
             'date_schedule_end'=>'2018-08-01',
             'level'=>'Misto',
             'vacancies'=>'45',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'31',
             'course_id'=>'32',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-08-20',
             
             'date_schedule_end'=>'2018-09-28',
             'level'=>'Misto',
             'vacancies'=>'30',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Possuir o Curso de Policiamento Montado - Nível operador.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'32',
             'course_id'=>'35',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-05-07',
             
             'date_schedule_end'=>'2018-05-14',
             'level'=>'Misto',
             'vacancies'=>'22',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Ter feito o CIP/CIAI/CISP,  Estar credenciado no SIPOM, Atuar na Atividade de Inteligência (CI Agências Locais e Regionais) ou equivalentes para outras instituições.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'33',
             'course_id'=>'36',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-09-10',
             
             'date_schedule_end'=>'2018-09-14',
             'level'=>'Misto',
             'vacancies'=>'12',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Ter feito o CIP/CIAI/CISP,  Estar credenciado no SIPOM, Atuar na Atividade de Inteligência (CI Agências Locais e Regionais) ou equivalentes para outras instituições.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'34',
             'course_id'=>'38',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-03-12',
             
             'date_schedule_end'=>'2018-03-26',
             'level'=>'Misto',
             'vacancies'=>'22',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Ter feito o CIP/CIAI/CISP,  Estar credenciado no SIPOM, Atuar na Atividade de Inteligência (CI Agências Locais e Regionais) ou equivalentes para outras instituições.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'35',
             'course_id'=>'39',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-02-19',
             
             'date_schedule_end'=>'2018-03-19',
             'level'=>'Misto',
             'vacancies'=>'40',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Parcialmente na modalidade de EaD.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'36',
             'course_id'=>'40',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-05-07',
             
             'date_schedule_end'=>'2018-05-18',
             'level'=>'Misto',
             'vacancies'=>'40',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Presencial',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'37',
             'course_id'=>'41',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-04-09',
             
             'date_schedule_end'=>'2018-04-19',
             'level'=>'Misto',
             'vacancies'=>'15',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Presencial',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'38',
             'course_id'=>'42',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-02-15',
             
             'date_schedule_end'=>'2018-02-28',
             'level'=>'Misto',
             'vacancies'=>'36',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Não ser tabagista ou usuário habitual de bebida alcoólica.',
             'regime'=>'Presencial',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'39',
             'course_id'=>'43',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-06-04',
             
             'date_schedule_end'=>'2018-06-28',
             'level'=>'Misto',
             'vacancies'=>'40',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Parcialmente na modalidade de EaD.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'40',
             'course_id'=>'44',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-08-06',
             
             'date_schedule_end'=>'2018-08-30',
             'level'=>'Misto',
             'vacancies'=>'45',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Parcialmente na modalidade de EaD.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'41',
             'course_id'=>'45',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-03-05',
             
             'date_schedule_end'=>'2018-03-19',
             'level'=>'Misto',
             'vacancies'=>'20',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Parcialmente na modalidade de EaD 14 dias de duração e 60h/a cada edição.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'42',
             'course_id'=>'45',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-08-06',
             
             'date_schedule_end'=>'2018-08-20',
             'level'=>'Misto',
             'vacancies'=>'20',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Parcialmente na modalidade de EaD 14 dias de duração e 60h/a cada edição.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'43',
             'course_id'=>'46',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-06-04',
             
             'date_schedule_end'=>'2018-06-18',
             'level'=>'Misto',
             'vacancies'=>'36',
             'duration'=>'',
             'workload'=>'',
             'requeriments'=>'Em conformidade com norma interna da Corporação.',
             'regime'=>'Em conformidade com norma interna da Corporação.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'44',
             'course_id'=>'47',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-02-01',
             
             'date_schedule_end'=>'2018-04-30',
             'level'=>'Misto',
             'vacancies'=>'40',
             'duration'=>'20',
             'workload'=>'40',
             'requeriments'=>'Ser integrante da comunidade acadêmica do ISCP/DEC-PMDF (alunos professores policiais do ISCP/DEC e sociedade civil).',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'45',
             'course_id'=>'47',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-08-01',
             
             'date_schedule_end'=>'2018-11-30',
             
             'vacancies'=>'40',
             'duration'=>'20',
             'workload'=>'40',
             'requeriments'=>'Ser integrante da comunidade acadêmica do ISCP/DEC-PMDF (alunos professores policiais do ISCP/DEC e sociedade civil).',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'46',
             'course_id'=>'48',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-02-01',
             
             'date_schedule_end'=>'2018-05-31',
             
             
             'duration'=>'30',
             'workload'=>'60',
             'requeriments'=>'Ser integrante da comunidade acadêmica do ISCP/DEC-PMDF (alunos professores servidores do ISCP/DEC-PMDF e sociedade civil.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
             
             CourseRelease::create( [
             'id'=>'47',
             'course_id'=>'48',
             'status_release_id'=>'1',
             'date_schedule_start'=>'2018-08-01',
             
             'date_schedule_end'=>'2018-12-31',
             
             
             'duration'=>'30',
             'workload'=>'60',
             'requeriments'=>'Ser integrante da comunidade acadêmica do ISCP/DEC-PMDF (alunos professores servidores do ISCP/DEC-PMDF e sociedade civil.',
             'regime'=>'Presencial.',
             'observation'=>'',
             'created_at'=>now(),
             'updated_at'=>now()
             ] );
 
         }    
 }