<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\FacultyProfile;
use App\Models\Gallery;
use App\Models\BrochureUserData;
class HomeController extends Controller
{
    public function home(){
        $data = FacultyProfile::all();
        return view('welcome', ['faculty' => $data]);
    }

    public function CmsGallery()
    {
        $data = Gallery::paginate(5);
        return view('cmsgallery', ['data' => $data]);
    }


    public function CmsFaculty()
    {
        $data = FacultyProfile::paginate(5);
        return view('cms.faculty', ['data' => $data]);
    }

    public function CmsAdmission()
    {
        $data = BrochureUserData::paginate(5);
        return view('cms.admission', ['data' => $data]);
    }

    public function Admdestroy($id)
    {
        $contact = BrochureUserData::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'User Data deleted successfully.');
    }

    public function CmsLanding()
    {
        return view('cms.landingpage');
    }

    public function Gallery(){
        $gallery =  Gallery::all();
        return view('picgallery',['gallery'=>$gallery]);
    }

    public function faculty(){

        return view('facultyprofile');
    }

    public function feeStructure(){
        return view('fee');
    }
    public function contactus()
    {
        return view('contactus');
    }
    public function contactmessage(Request $request)
    {

        $validatedData= $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'email' => 'required_without:phone|nullable|email',
            'phone' => 'required_without:email|nullable|integer',
        ]);
        $contact = new ContactUs();
        $contact->name = $validatedData['name'];
        $contact->message = $validatedData['message'];
        $contact->email = $validatedData['email'] ?? null;
        $contact->phone = $validatedData['phone'] ?? null;
        $contact->save();
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function dashboard()
    {
        $data = ContactUs::paginate(5);

        // Pass contacts data to the view
        return view('dashboard', ['data' => $data]);
    }
    public function Contactedit($id)
    {
        $contact = ContactUs::findOrFail($id);

        return view('edit-contact', compact('contact'));
    }

    public function Contactdestroy($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Contact message deleted successfully.');
    }
    public function Profileedit($id)
    {
        $data = FacultyProfile::findOrFail($id);
        return view('facultyUpdate', ['data' => $data]);
    }

    public function Profiledestroy($id)
    {
        $contact = FacultyProfile::findOrFail($id);
        $contact->delete();

        $data = FacultyProfile::paginate(5);
        return view('cms.faculty', ['data' => $data])->with('success', 'Faculty member has been deleted successfully!]');
    }
    public function facultyCreate(){
        return view('facultycreate');
    }

    public function facultyStore(Request $request){

        $validatedData= $request->validate([
            'name' => 'required|string|max:255',
            'design' => 'required|string',
            'email' => 'required|email',
            'detail' => 'required|string',
            'group' => 'required|string',
            'image' => 'required',
        ]);

        $faculty = new FacultyProfile();
        $faculty->name = $validatedData['name'];
        $faculty->design = $validatedData['design'];
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('pro-images'), $imageName);
            $faculty->image = '/pro-images/'.$imageName;
        }
        $faculty->email = $validatedData['email'];
        $faculty->detail = $validatedData['detail'];
        $faculty->group = $validatedData['group'];
        $faculty->save();
        $data = FacultyProfile::paginate(5);
        return view('cms.faculty', ['data' => $data])->with('success', 'Faculty member has been added successfully!]');
    }

    public function facultyupdate(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'design' => 'required|string',
            'email' => 'required|email',
            'detail' => 'required|string',
            'group' => 'required|string',
            'image' => 'required',
        ]);
        $faculty = FacultyProfile::findOrFail($id);
        $faculty->name = $request->name;
        $faculty->design = $request->design;
        $faculty->email = $request->email;
        $faculty->group = $request->group;
        $faculty->detail = $request->detail;

        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($faculty->image && file_exists(public_path($faculty->image))) {
                unlink(public_path($faculty->image));
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('pro-images'), $imageName);
            $faculty->image = '/pro-images/'.$imageName;
        }

        $faculty->save();

        return redirect()->route('faculty-pro')->with('success', 'Faculty profile updated successfully!');
    }

    public function GalleryStore(Request $request){
        $validatedData= $request->validate([
            'image' => 'required',
        ]);

        $gallery = new Gallery();
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('gallery-images'), $imageName);
            $gallery->image = '/gallery-images/'.$imageName;
        }
        $gallery->save();
        $data = Gallery::paginate(5);
        return view('cmsgallery', ['data' => $data])->with('success', 'Faculty member has been added successfully!]');
    }

    public function GalleryCreate(){
        return view('galleryCreate');

    }
    public function Gallerydestroy($id)
    {
        $contact = Gallery::findOrFail($id);
        $contact->delete();

        $data = Gallery::paginate(5);
        return redirect()->route('cms-gallery')->with('success', 'Faculty profile created successfully!');
    }
    public function SyllabusView(){
        return view('brochureView');
    }
    public function brochureData(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
        BrochureUserData::where('email', $request->email)->delete();

        BrochureUserData::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

            return redirect('/syllabus');

    }
}
