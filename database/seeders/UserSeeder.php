<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Bio;
use App\Models\Car;
use App\Models\Organization;
use App\Models\Group;
use App\Models\Family;
use App\Models\TypeOfProject;
use App\Models\Project;
use App\Models\Status;
use Carbon\Carbon;
use App\Models\ProjectGroup;
use App\Models\SecurityPost;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug','admin')->first();
        $owner = Role::where('slug','owner')->first();
        $guard_post = Role::where('slug','guard-post')->first();

        $bdo = Organization::where('name', 'BdoDesigner')->first();

        $post = SecurityPost::find(1);

        $managers = Group::where('slug', 'managers')->first();
        $owners = Group::where('slug', 'owners')->first();
        $workers = Group::where('slug', 'workers')->first();

        $group = ProjectGroup::find(1);

        //Администратор
        $bio = new Bio();
        $bio->name = "Сергей";
        $bio->lastname = "Николаевич";
        $bio->surname = "Иванов";
        $bio->sex = "Мужской";
        $bio->dateofbirth = Carbon::now()->subYears(35);

        $user1 = new User();
        $user1->phone = '9093751695';
        $user1->email = 'admin@bdodisigner.ru';
        $user1->password = bcrypt('admin');
        $user1->save();
        $user1->roles()->attach($admin);
        $user1->group()->attach($managers);
        $user1->organization()->attach($bdo);
        $bio->user()->associate($user1)->save();

        //Собственник 1
        $bio2 = new Bio();
        $bio2->name = "Андрей";
        $bio2->lastname = "Николаевич";
        $bio2->surname = "Лунин";
        $bio2->sex = "Мужской";
        $bio2->dateofbirth = Carbon::now()->subYears(25);

        $family1 = new Family();
        $family1->name = 'Семья 1';
        $family1->save();

        $user2 = new User();
        $user2->phone = '9093751696';
        $user2->email = 'arsen963110@mail.ru';
        $user2->password = bcrypt('secret');
        $user2->save();
        $user2->roles()->attach($owner);
        $user2->group()->attach($owners);
        $user2->family()->attach($family1);
        $bio2->user()->associate($user2)->save();

        $car2 = new Car();
        $car2->model = 'Toyota';
        $car2->number = 'А305АА';
        $car2->type = 'Постоянное';
        $car2->body = 'Легковое';
        $car2->color = 'Белый';
        $car2->user()->associate($user2)->save();


        $project = new Project();
        $type = TypeOfProject::where('slug', 'house')->first();
        $status = Status::find(1);
        $project->name = 'Проект загородного дома';
        $project->description = 'Без описания';
        $project->region = 'г Москва';
        $project->city = 'г Москва';
        $project->street = 'пр-кт Ленинский';
        $project->numberofhouse = 'д 7';
        $project->numberofroom = '12';
        $project->totalarea = 300.5;
        $project->livingarea = 265;
        $project->status()->associate($status);
        $project->organization()->associate($bdo);
        $project->project_group()->associate($group);
        $project->typeofproject()->associate($type)->save();
        $user2->projects()->attach($project);

        //Собственник 2
        $bio3 = new Bio();
        $bio3->name = "Петр";
        $bio3->lastname = "Васильевич";
        $bio3->surname = "Комов";
        $bio3->sex = "Мужской";
        $bio3->dateofbirth = Carbon::now()->subYears(37);

        $family2 = new Family();
        $family2->name = 'Семья 2';
        $family2->save();

        $user3 = new User();
        $user3->phone = '9093751697';
        $user3->email = 'arsen9631@gmail.com';
        $user3->password = bcrypt('secret');
        $user3->save();
        $user3->roles()->attach($owner);
        $user3->group()->attach($owners);
        $user3->family()->attach($family2);
        $bio3->user()->associate($user3)->save();

        $car3 = new Car();
        $car3->model = 'Mercedes';
        $car3->number = 'А310АА';
        $car3->type = 'Постоянное';
        $car3->body = 'Легковое';
        $car3->color = 'Красный';
        $car3->user()->associate($user2)->save();


        $project3 = new Project();
        $project3->name = 'Ремонт 4к квартиры';
        $project3->description = 'Без описания';
        $project3->region = 'г Москва';
        $project3->city = 'г Москва';
        $project3->street = 'ул Профсоюзная';
        $project3->numberofhouse = 'д 42';
        $project3->numberofroom = '12';
        $project3->totalarea = 170.5;
        $project3->livingarea = 150;
        $project3->status()->associate($status);
        $project3->organization()->associate($bdo);
        $project3->typeofproject()->associate($type)->save();
        $user3->projects()->attach($project3);

        //Собственник 3
        $bio3 = new Bio();
        $bio3->name = "Алексей";
        $bio3->lastname = "Юрьевич";
        $bio3->surname = "Ушаков";
        $bio3->sex = "Мужской";
        $bio3->dateofbirth = Carbon::now()->subYears(27);

        $family2 = new Family();
        $family2->name = 'Семья 3';
        $family2->save();

        $user3 = new User();
        $user3->phone = '9093751699';
        $user3->email = 'luka963110@mail.ru';
        $user3->password = bcrypt('secret');
        $user3->save();
        $user3->roles()->attach($owner);
        $user3->group()->attach($owners);
        $user3->family()->attach($family2);
        $bio3->user()->associate($user3)->save();

        $car3 = new Car();
        $car3->model = 'Skoda';
        $car3->number = 'А315АА77';
        $car3->type = 'Постоянное';
        $car3->body = 'Легковое';
        $car3->color = 'Черный';
        $car3->user()->associate($user3)->save();

        $project = new Project();
        $type = TypeOfProject::where('slug', 'house')->first();
        $status = Status::find(1);
        $project->name = 'Проект 2x этажного дома';
        $project->description = 'Без описания';
        $project->region = 'г Москва';
        $project->city = 'г Москва';
        $project->street = 'пр-кт Ленинский';
        $project->numberofhouse = 'д 10';
        $project->numberofroom = '35';
        $project->totalarea = 200.5;
        $project->livingarea = 165;
        $project->status()->associate($status);
        $project->project_group()->associate($group);
        $project->organization()->associate($bdo);
        $project->typeofproject()->associate($type)->save();
        $user3->projects()->attach($project);

        //Охранник поста
        $bio_g = new Bio();
        $bio_g->name = "Кирилл";
        $bio_g->lastname = "Валерьевич";
        $bio_g->surname = "Кушаков";
        $bio_g->sex = "Мужской";
        $bio_g->dateofbirth = Carbon::now()->subYears(32);

        $user_g = new User();
        $user_g->phone = '9093751700';
        $user_g->email = 'guard-post@bdodisigner.ru';
        $user_g->password = bcrypt('guardpost');
        $user_g->save();
        $user_g->roles()->attach($guard_post);
        $user_g->group()->attach($managers);
        $user_g->security_post()->attach($post);
        $user_g->organization()->attach($bdo);
        $bio_g->user()->associate($user_g)->save();

    }
}
