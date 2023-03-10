<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Subject;

class TextHousingSeeder extends Seeder
{
   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $parentSubject = Subject::where('slug', 'housing')->first();

        $texts = [
            [
                'title' => 'How to organize the office',
                'title_pt' => 'Como organizar o escritório',
                'subject_id' => $parentSubject->id,
                'slug' => 'how-to-organize-the-office',
                'text' => 'Organizing the office is an important part of creating a productive and efficient work environment. It’s essential to create a system that works for you and your team, so that everyone can access what they need when they need it. Here are some tips to help you get started: <br>
                <br>
                1. Start by identifying what needs to be organized. Make a list of all the items that need to be organized and prioritize them.<br>
                <br>
                2. Designate a specific place for everything. Have a spot for everything, from pens and paper to filing cabinets and documents.<br>
                <br>
                3. Keep only what you need. Get rid of anything that’s not necessary or hasn’t been used in a while.<br>
                <br>
                4. Label everything. Labeling shelves, drawers, and filing cabinets will help keep everything organized and easy to find.<br>
                <br>
                5. Make sure everything is accessible. Make sure that everything can be easily reached when it’s needed.<br>
                <br>
                6. Use dividers and bins. Using dividers and bins can help keep documents and items organized and easy to find.<br>
                <br>
                7. Create a system for filing. Set up a filing system to help keep paperwork and documents organized and easy to find.<br>
                <br>
                8. Create a system for handling mail. Have a system in place for handling incoming and outgoing mail.<br>
                <br>
                9. Invest in storage solutions. Invest in storage solutions that will help keep the office organized and efficient. <br>
                <br>
                10. Set up a system for handling electronics. Invest in surge protectors and cables to help keep electronics organized and easy to find.<br>
                <br>
                Organizing the office is an important part of creating a productive and efficient work environment. With the right system in place, everyone can access what they need when they need it. By following these tips, you’ll be able to create an organized and efficient office.',
                'text_pt' => 'Organizar o escritório é uma parte importante para criar um ambiente de trabalho produtivo e eficiente. É essencial criar um sistema que funcione para você e sua equipe, para que todos possam acessar o que precisam quando precisam. Aqui estão algumas dicas para ajudá-lo a começar:<br>
                <br>
                1. Comece identificando o que precisa ser organizado. Faça uma lista de todos os itens que precisam ser organizados e priorize-os.<br>
                <br>
                2. Designe um lugar específico para tudo. Tenha um lugar para tudo, desde canetas e papel até armários de arquivo e documentos.<br>
                <br>
                3. Mantenha apenas o que você precisa. Descarte tudo o que não for necessário ou não tenha sido usado por um tempo.<br>
                <br>
                4. Rotule tudo. Rotular prateleiras, gavetas e armários de arquivo ajudará a manter tudo organizado e fácil de encontrar.<br>
                <br>
                5. Certifique-se de que tudo esteja acessível. Certifique-se de que tudo possa ser facilmente alcançado quando for necessário.<br>
                <br>
                6. Use divisórias e caixas. Usar divisórias e caixas pode ajudar a manter documentos e itens organizados e fáceis de encontrar.<br>
                <br>
                7. Crie um sistema para arquivamento. Estabeleça um sistema de arquivamento para ajudar a manter documentos e papéis organizados e fáceis de encontrar.<br>
                <br>
                8. Crie um sistema para lidar com o correio. Tenha um sistema em vigor para lidar com o correio de entrada e saída.<br>
                <br>
                9. Invista em soluções de armazenamento. Invista em soluções de armazenamento que ajudarão a manter o escritório organizado e eficiente.<br>
                <br>
                10. Estabeleça um sistema para lidar com eletrônicos. Invista em protectores de sobretensão e cabos para ajudar a manter os eletrônicos organizados e fáceis de encontrar.<br>
                <br>
                Organizar o escritório é uma parte importante para criar um ambiente de trabalho produtivo e eficiente. Com o sistema certo no lugar, todos podem acessar o que precisam quando precisam. Seguindo estas dicas, você poderá criar um escritório organizado e eficiente.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'How to keep your home office clean',
                'title_pt' => 'Como manter limpo o escritório de casa',
                'subject_id' => $parentSubject->id,
                'slug' => 'how-to-keep-your-home-office-clean',
                'text' => "Having a clean and organized home office can be key to staying productive and focused while working from home. After all, a messy office can be distracting and make it difficult to concentrate. Here are some tips to help you keep your home office neat and tidy:<br>
                <br>
                1. Create a filing system. Developing a filing system can help you keep track of important documents and papers. Consider putting all of your documents in labeled folders and filing them away in a filing cabinet or desk drawer, making sure to keep your most frequently used documents within easy reach.<br>
                <br>
                2. Make use of storage. Invest in some storage solutions to help keep your home office from becoming cluttered. Storage bins, drawers, and cabinets are a great way to store supplies, papers, and other items.<br>
                <br>
                3. Keep cords organized. Making sure all of your cords are organized can help keep your office from looking messy. Use cable ties to keep cords from tangling and use cable organizers to keep cords from cluttering your desk space.<br>
                <br>
                4. Clean as you go. After each work session, take a few minutes to put away any items you used, as well as to tidy up your desk. This will help keep your office space looking neat and tidy and make it easier to start your next work session.<br>
                <br>
                5. Have a dedicated spot for incoming items. Designate a spot in your home office for incoming items, such as mail or new supplies. This will help you keep track of anything that comes into your office, as well as make it easier to put it away when you\'re done.<br>
                <br>
                By following these tips, you can help keep your home office neat and tidy and make it easier to stay focused and productive when working from home.",
                'text_pt' => 'Ter um escritório em casa limpo e organizado pode ser essencial para manter a produtividade e foco ao trabalhar de casa. Afinal, um escritório desorganizado pode ser distraído e dificultar a concentração. Aqui estão algumas dicas para ajudá-lo a manter seu escritório em casa limpo e arrumado:<br>
                <br>
                1. Crie um sistema de arquivamento. Desenvolver um sistema de arquivamento pode ajudá-lo a acompanhar documentos e papéis importantes. Considere colocar todos os seus documentos em pastas rotuladas e arquivá-los em um arquivo ou gaveta de escrivaninha, certificando-se de manter os documentos mais usados ​​à mão.<br>
                <br>
                2. Aproveite o armazenamento. Invista em algumas soluções de armazenamento para ajudar a manter seu escritório em casa de ficar aglomerado. Caixas de armazenamento, gavetas e armários são uma ótima maneira de armazenar suprimentos, papéis e outros itens.<br>
                <br>
                3. Mantenha os cabos organizados. Garantir que todos os seus fios estejam organizados pode ajudar a manter seu escritório limpo. Use presilhas para manter os fios de se embaraçarem e use organizadores de cabo para evitar que os fios baguncem seu espaço de trabalho.<br>
                <br>
                4. Limpe à medida que você vai. Após cada sessão de trabalho, reserve alguns minutos para guardar os itens que você usou, assim como arrumar sua mesa. Isso ajudará a manter seu espaço de trabalho arrumado e limpo e facilitará o início de sua próxima sessão de trabalho.<br>
                <br>
                5. Tenha um lugar dedicado a itens de entrada. Designe um lugar em seu escritório em casa para itens de entrada, como correspondência ou novos suprimentos. Isso ajudará você a acompanhar tudo o que entrar em seu escritório e também facilitará a colocá-lo de volta quando terminar.<br>
                <br>
                Ao seguir estas dicas, você poderá manter seu escritório em casa arrumado e limpo e facilitará a manter-se focado e produtivo quando trabalhar de casa.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('text')->insert(
            array_map(function ($text) use ($parentSubject) {
                return [
                    'title' => $text['title'],
                    'title_pt' => $text['title_pt'],
                    'slug' => $text['slug'],
                    'subject_id' => $parentSubject->id,
                    'text' => $text['text'],
                    'text_pt' => $text['text_pt'],
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }, $texts)
        );
    }
}
