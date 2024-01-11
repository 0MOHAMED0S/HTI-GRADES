<?php

namespace App\Http\Livewire;

use Livewire\Component;

use function Termwind\render;

class Grades extends Component
{
    public $name, $code, $Programming_basics,
        $computer_programming, $Computer_assembly,
        $Databases, $Technical_Support,
        $Career_guidance, $general_appreciation, $grade_id, $grades, $grades2, $active, $deleteId,$name3;

        public $name2, $code2, $Programming_basics2,
        $computer_programming2, $Computer_assembly2,
        $Databases2, $Technical_Support2,
        $Career_guidance2, $general_appreciation2,$active2;

    public $submitted = false;

    protected function rules()
{
    return [
        'name2' => 'required|string',
        'code2' => 'required|unique:grades,code',
        'active2' => 'required|string',
        'Programming_basics2' => 'required|string',
        'computer_programming2' => 'required|string',
        'Computer_assembly2' => 'required|string',
        'Databases2' => 'required|string',
        'Technical_Support2' => 'required|string',
        'Career_guidance2' => 'required|string',
        'general_appreciation2' => 'required|string',
    ];
}

    protected function addRules()
    {
        return [
            'name' => 'required|string',
            'code' => 'required|unique:grades,code,' . $this->grade_id,
        ];
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, $this->rules());
    }
    
    public function edit($id)
    {
        $grades = \App\Models\grades::findOrFail($id);
        $this->grade_id = $grades->id;
        $this->name = $grades->name;
        $this->active = $grades->active;
        $this->code = $grades->code;
        $this->Programming_basics = $grades->Programming_basics;
        $this->computer_programming = $grades->computer_programming;
        $this->Computer_assembly = $grades->Computer_assembly;
        $this->Databases = $grades->Databases;
        $this->Technical_Support = $grades->Technical_Support;
        $this->Career_guidance = $grades->Career_guidance;
        $this->general_appreciation = $grades->general_appreciation;
    }

    public function update()
    {
        $this->validate($this->addRules());
    
        // Update the data using Eloquent ORM
        $grades = \App\Models\grades::findOrFail($this->grade_id);
        $grades->name = $this->name;
        $grades->code = $this->code;
        $grades->active = $this->active;
        $grades->Programming_basics = $this->Programming_basics;
        $grades->computer_programming = $this->computer_programming;
        $grades->Computer_assembly = $this->Computer_assembly;
        $grades->Databases = $this->Databases;
        $grades->Technical_Support = $this->Technical_Support;
        $grades->Career_guidance = $this->Career_guidance;
        $grades->general_appreciation = $this->general_appreciation;
        $grades->save();
    
        $this->resetFields2();
        session()->flash('success', 'Student Grades Edited Successfully');
        $this->submitted = false;
        $this->dispatchBrowserEvent('close-modal');
    }


    public function adddtudent_grades()
    {
        $this->validate($this->Rules());

        $grades = new \App\Models\grades();
        $grades->name = $this->name2;
        $grades->code = $this->code2;
        $grades->active = $this->active2;
        $grades->Programming_basics = $this->Programming_basics2;
        $grades->computer_programming = $this->computer_programming2;
        $grades->Computer_assembly = $this->Computer_assembly2;
        $grades->Databases = $this->Databases2;
        $grades->Technical_Support = $this->Technical_Support2;
        $grades->Career_guidance = $this->Career_guidance2;
        $grades->general_appreciation = $this->general_appreciation2;
        $grades->save();
        $this->resetFields();
        session()->flash('success2', 'Student Grades Added Successfully');
        $this->dispatchBrowserEvent('close-modal');

    }

    public function resetFields()
    {
        $this->name2 = null;
        $this->code2 = null;
        $this->Programming_basics2 = null;
        $this->computer_programming2 = null;
        $this->Computer_assembly2 = null;
        $this->Databases2 = null;
        $this->active2 = null;
        $this->Technical_Support2 = null;
        $this->Career_guidance2 = null;
        $this->general_appreciation2 = null;
    }
    public function resetFields2()
    {
        $this->name = null;
        $this->Programming_basics = null;
        $this->computer_programming = null;
        $this->Computer_assembly = null;
        $this->Databases = null;
        $this->active = null;
        $this->Technical_Support = null;
        $this->Career_guidance = null;
        $this->general_appreciation = null;
    }
    public function delete($id)
    {
        $this->deleteId = $id;
        $grades = \App\Models\grades::findOrFail($id);
        $this->name3 = $grades->name;
    }


    public function destroy()
    {
        \App\Models\grades::find($this->deleteId)->delete();
        session()->flash('success', 'Student grades Deleted Successfully');
        $this->resetFields();
        $this->submitted = false;
        $this->dispatchBrowserEvent('close-modal');

    }
    public function submit()
    {
        $this->submitted = true;
        $this->grades = \App\Models\grades::where('code', $this->code)->get();
    }

    public function submit2()
    {
        $this->submitted = true;
        $this->grades2 = \App\Models\grades::where('code', $this->code)->get();
    }

    public function render()
    {
        return view('livewire.grades', ['grades' => $this->grades, 'grades2' => $this->grades2]);
    }
}
