 DB:
 mysql -uroot -p
 create database ksLaravel;
 
 Route:
 
 ```
Route::get("/stplus", function () {

    $name = "Robert";
    $tasks = ['Preplanning in de agenda zetten', 'Standup bijwonen', 'Dashboard testen'];

    return view('stplus')->with('name',$name)->with('tasks',$tasks);
});
 ```
 
 Route::get("/stplus", function () {
 
     $name = "Robert";
 //    $tasks = ['Preplanning in de agenda zetten', 'Standup bijwonen', 'Dashboard testen'];
 
     $tasks = DB::table('tasks')->get();
 
     return $tasks;
 
 //    return view('stplus')->with('name',$name)->with('tasks',$tasks);
 });
 
 
 Route::get("/stplus/{task}", function ($id) {
 
     $task = DB::table('tasks')->find($id);
 
     return $task->task;
 
 });
 
 Blade:
 ```
 <h1>Hello {{$name}}!</h1>
 <ul>
     @foreach($tasks as $task)
         <li>
             {{$task}}
         </li>
     @endforeach
 </ul>
 ```
 
 Migration:

     const TABLE = 'tasks';
 
     /**
      * Run the migrations.
      *
      * @return void
      */
      public function up()
     {
         Schema::create(self::TABLE, function (Blueprint $table) {
             $table->increments('id');
             $table->text('desc');
             $table->boolean('completed')->default(false);
             $table->timestamps();
         });
     }
 
     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists(self::TABLE);
     }

 
 
 