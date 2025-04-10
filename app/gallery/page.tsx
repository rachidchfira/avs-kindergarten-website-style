"use client"

import Image from "next/image"
import { useLanguage } from "@/contexts/language-context"

export default function GalleryPage() {
  const { t } = useLanguage()

  const photos = [
    {
      id: 1,
      src: "/IMG_3061.JPG",
      alt: "School facilities and activities",
    },
    {
      id: 2,
      src: "/IMG_3062.JPG",
      alt: "Learning environment",
    },
    {
      id: 3,
      src: "/IMG_3063.JPG",
      alt: "Classroom activities",
    },
    {
      id: 4,
      src: "/IMG_3064.JPG",
      alt: "Student activities",
    },
    {
      id: 5,
      src: "/IMG_3065.JPG",
      alt: "School events",
    },
    {
      id: 6,
      src: "/IMG_3066.JPG",
      alt: "Learning spaces",
    },
    {
      id: 7,
      src: "/IMG_3067.JPG",
      alt: "Educational activities",
    },
    {
      id: 8,
      src: "/IMG_3068.JPG",
      alt: "Student engagement",
    },
    {
      id: 9,
      src: "/IMG_3069.JPG",
      alt: "School facilities",
    },
    {
      id: 10,
      src: "/IMG_3070.JPG",
      alt: "Student learning",
    },
    {
      id: 11,
      src: "/IMG_3071.JPG",
      alt: "School environment",
    },
    {
      id: 12,
      src: "/IMG_3072.JPG",
      alt: "Educational spaces",
    },
  ]

  return (
    <div className="py-16">
      <div className="container mx-auto px-4">
        <h1 className="text-4xl font-bold text-primary text-center mb-4">{t("gallery.title")}</h1>
        <p className="text-center text-gray-600 mb-12 max-w-3xl mx-auto">
          {t("gallery.subtitle")}
        </p>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {photos.map((photo) => (
            <div
              key={photo.id}
              className="group relative aspect-video rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all"
            >
              <Image
                src={photo.src}
                alt={photo.alt}
                fill
                className="object-cover transition-transform group-hover:scale-110 duration-500"
              />
              <div className="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                <p className="text-white text-center px-4 text-sm font-medium backdrop-blur-sm py-2 rounded-lg bg-black/30">
                  {t(`gallery.photo${photo.id}`)}
                </p>
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  )
}
