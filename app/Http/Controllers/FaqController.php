namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Category;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    // Display FAQ pages
    public function index()
    {
        // Faqs are grouped by category for better organization
        $categories = Category::with('faqs')->get();
        return view('faq.index', compact('categories'));
    }

    // Creation form (Admin only)
    public function create()
    {
        $categories = Category::all();
        return view('faq.create', compact('categories'));
    }

    // Save/Store action (Admin only)
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'question' => 'required|max:255',
            'answer' => 'required',
        ]);

        Faq::create($request->all());

        return redirect()->route('faq.index');
    }
}