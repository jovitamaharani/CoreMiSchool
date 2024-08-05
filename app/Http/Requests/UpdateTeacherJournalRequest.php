<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherJournalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'description' => 'required',
            'students' => 'nullable',
            'students.*.classroom_student_id' => 'nullable',
            'students.*.lesson_hour_id' => 'nullable',
            'students.*.status' => 'nullable',
            'students.*.description' => 'nullable',
        ];
    }

    /**
     * Custom validation messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'description.required' => 'Deskripsi harus diisi.',
            'date.required' => 'Tanggal harus diisi.',
            'student*.required' => 'Siswa harus diisi.',
            'student.required' => 'Siswa harus diisi.',
        ];
    }
}
