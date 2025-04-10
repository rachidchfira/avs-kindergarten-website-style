"use client"

import Image from "next/image"
import { useLanguage } from "@/contexts/language-context"
import { notFound } from "next/navigation"

const programs = [
  {
    id: "1",
    titleKey: "programs.basic.title",
    descriptionKey: "programs.basic.description",
    image: "/IMG_3067.JPG",
    ageKey: "programs.basic.age",
    durationKey: "programs.basic.duration",
    contentKey: "programs.basic.content",
    galleryImages: ["/IMG_3070.JPG", "/IMG_3071.JPG"]
  },
  {
    id: "2",
    titleKey: "programs.steam.title",
    descriptionKey: "programs.steam.description",
    image: "/IMG_3068.JPG",
    ageKey: "programs.steam.age",
    durationKey: "programs.steam.duration",
    contentKey: "programs.steam.content",
    galleryImages: ["/IMG_3072.JPG", "/IMG_3073.JPG"]
  },
  {
    id: "3",
    titleKey: "programs.english.title",
    descriptionKey: "programs.english.description",
    image: "/IMG_3069.JPG",
    ageKey: "programs.english.age",
    durationKey: "programs.english.duration",
    contentKey: "programs.english.content",
    galleryImages: ["/IMG_3074.JPG", "/IMG_3075.JPG"]
  }
]

export default function ProgramPage({ params }: { params: { id: string } }) {
  const { t } = useLanguage()
  
  const program = programs.find(p => p.id === params.id)
  
  if (!program) {
    notFound()
  }

  return (
    <div className="py-16">
      <div className="container mx-auto px-4">
        <div className="max-w-4xl mx-auto">
          <div className="relative h-[400px] mb-8 rounded-lg overflow-hidden">
            <Image
              src={program.image}
              alt={t(program.titleKey)}
              fill
              className="object-cover"
            />
          </div>

          <h1 className="text-4xl font-bold text-primary mb-6">{t(program.titleKey)}</h1>
          
          <div className="grid md:grid-cols-2 gap-8 mb-8">
            <div className="bg-primary/5 p-6 rounded-lg">
              <h3 className="font-semibold text-primary mb-2">{t(program.ageKey)}</h3>
              <p className="text-gray-600">{t(program.durationKey)}</p>
            </div>
            <div className="bg-secondary/10 p-6 rounded-lg">
              <h3 className="font-semibold text-primary mb-2">Program Benefits</h3>
              <ul className="list-disc pl-5 text-gray-600 space-y-1">
                <li>Comprehensive skill development</li>
                <li>Personalized learning approach</li>
                <li>Regular progress assessments</li>
                <li>Parent-teacher collaboration</li>
              </ul>
            </div>
          </div>

          <div className="prose max-w-none">
            <p className="text-lg text-gray-600 mb-6">{t(program.descriptionKey)}</p>
            <div className="bg-gray-50 p-6 rounded-lg mb-8">
              <h3 className="text-xl font-semibold text-primary mb-4">Program Details</h3>
              <div className="whitespace-pre-line text-gray-600">{t(program.contentKey)}</div>
            </div>
            
            {program.galleryImages && program.galleryImages.length > 0 && (
              <div className="mt-8 mb-8">
                <h3 className="text-xl font-semibold text-primary mb-4">Program Gallery</h3>
                <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                  {program.galleryImages.map((img, index) => (
                    <div key={index} className="relative aspect-video rounded-lg overflow-hidden shadow-md">
                      <Image
                        src={img}
                        alt={`${t(program.titleKey)} - Gallery image ${index + 1}`}
                        fill
                        className="object-cover hover:scale-105 transition-transform duration-500"
                      />
                    </div>
                  ))}
                </div>
              </div>
            )}
            
            <div className="mt-8 text-center">
              <a 
                href="/contact" 
                className="inline-block bg-secondary text-primary px-8 py-3 rounded-full font-semibold hover:bg-secondary/90 transition-colors"
              >
                Register for this Program
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
