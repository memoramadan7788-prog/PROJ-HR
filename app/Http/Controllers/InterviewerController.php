<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterviewerController extends Controller
{
    public function index()
    {
        $scorecardData = [
            'candidate_name' => 'Maya Chen',
            'interview_type' => 'Portfolio interview',
            'session_code' => 'NS-204',
            'interviewer_name' => 'Alex Morgan',
            'draft_saved_at' => 'October 22 at 11:05 AM',
            'competencies' => [
                ['name' => 'Problem framing', 'rating' => '4 - Strong', 'evidence' => 'Clear synthesis from customer interviews to priority.'],
                ['name' => 'Interaction craft', 'rating' => '3 - Meets', 'evidence' => 'Detailed workflow states and accessibility rationale.'],
                ['name' => 'Systems thinking', 'rating' => '3 - Meets', 'evidence' => 'Explained reusable patterns and documented exceptions.'],
                ['name' => 'Collaboration', 'rating' => '3 - Meets', 'evidence' => 'Specific trade-offs agreed with product and engineering.'],
            ],
            'strengths' => 'Strong problem framing and thoughtful SaaS interaction design. Connected decisions to observed customer needs and explained trade-offs clearly.',
            'concerns' => 'Would like the team interview to explore prioritization across multiple product teams. No material concern observed in this session.',
            'recommendation' => 'Hire - Evidence supports the role expectations.'
        ];

        return view('interviewer.interviewer', compact('scorecardData'));
    }
}