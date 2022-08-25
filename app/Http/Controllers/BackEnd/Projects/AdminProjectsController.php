<?php

namespace App\Http\Controllers\BackEnd\Projects;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ProjectRepository;
use App\Http\Requests\ProjectRequest;
use App\Http\Services\ProjectService;
use App\Models\ProjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProjectsController extends Controller
{
    protected $projectService;
    protected $projectRepository;

    public function __construct(ProjectService $projectService, ProjectRepository $projectRepository)
    {
        $this->projectService = $projectService;
        $this->projectRepository = $projectRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = ProjectModel::all();
        return view('BackEnd.Projects.index', compact(['projects']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.Projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $projectRequest)
    {
        $projectRequest->validated();
        $project = $this->projectRepository->createProject($projectRequest);
        $this->projectRepository->createProjectData($projectRequest, $project);
        $this->projectService->addingMediaToCollection($project, $projectRequest);
        return redirect()->route('admin.cases.edit', $project->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = ProjectModel::where('id',$id)->first();
        return view('BackEnd.Projects.edit',compact(['project']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $projectRequest, $id)
    {
        $projectRequest->validated();
        $project = ProjectModel::where('id',$id)->first();
        $data = $projectRequest->all();
        $this->projectService->addingMediaToCollection($project, $projectRequest);
        $dataStatus = $this->projectRepository->saveProjectData($projectRequest, $project);
        $projectStatus = $this->projectRepository->updateProjectModel($projectRequest, $project);
        return redirect()->route('admin.cases.edit', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function projectDelete(Request $request){
        $id = $request->input('id');
        $project = ProjectModel::where('id',$id)->first();
        $project->delete();
        $project->data->delete();
        return response()->json(['msg'=> $project->title.' успешно удален!','status'=>true, 'deleted'=>$id]);
    }
    public function projectStatus(Request $request){
        if ($request->mode =='true'){
            DB::table('project_models')->where('id', $request->id)->update(['status'=>'active']);
        } else {
            DB::table('project_models')->where('id', $request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Успешное редактирование статуса','status'=>true]);
    }
    public function deleteProjectMedia(Request $request){
        $media = $request->input('id');
        $model = ProjectModel::where('id',$request->input('project_id'))->first();
        $status = $this->projectService->deleteMediaFromModel($model, $media);
        return response()->json(['status'=>$status]);
    }
}
