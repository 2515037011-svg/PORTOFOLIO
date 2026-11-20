<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $helpers = ['url'];

    public function index(): string
    {
        return view('welcome_message');
    }

    public function portfolio(): string
    {
        return view('portofolio');
    }

    public function work(): string
    {
        return view('work');
    }

    public function portfolioProject(string $slug): string
    {
        return $this->renderProjectGallery($slug, 'portofolio');
    }

    public function workProject(string $slug): string
    {
        return $this->renderProjectGallery($slug, 'work');
    }

    private function renderProjectGallery(string $slug, string $section): string
    {
        $db = db_connect();
        $gallery = $db->table('project_galleries')
            ->where('section', $section)
            ->where('slug', $slug)
            ->get()
            ->getRowArray();

        if ($gallery === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rows = $db->table('gallery_images')
            ->where('gallery_id', $gallery['id'])
            ->orderBy('sort_order', 'ASC')
            ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();

        $images = array_map(static function (array $row): array {
            return [
                'src' => base_url($row['image_path']),
                'alt' => $row['alt_text'],
            ];
        }, $rows);

        $galleryRoot = $section === 'portofolio' ? 'portofolio' : 'projects';

        return view('project', [
            'project' => [
                'title'           => $gallery['title'],
                'description'     => $gallery['description'],
                'slug'            => $slug,
                'sectionPath'     => $section,
                'sectionLabel'    => $section === 'portofolio' ? 'Portofolio' : 'Work',
                'galleryDirectory' => 'public/images/' . $galleryRoot . '/' . $slug . '/',
            ],
            'images'  => $images,
        ]);
    }

    public function about(): string
    {
        $profile = db_connect()
            ->table('about_profile')
            ->select('image_path, alt_text')
            ->where('id', 1)
            ->get()
            ->getRowArray();

        if ($profile === null) {
            throw new \RuntimeException('The About profile photo is missing from the database.');
        }

        return view('about', ['profile' => $profile]);
    }
}
