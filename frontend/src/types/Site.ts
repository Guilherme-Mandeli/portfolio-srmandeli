export interface Site {
    id: number
    title: string
    description: string
    excerpt: string
    image_url: string
    url: string
    slug: string
    status: 'draft' | 'published'
    created_at: string
    updated_at: string
}