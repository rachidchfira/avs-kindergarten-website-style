"use client"

import Image from "next/image"
import Link from "next/link"
import { useLanguage } from "@/contexts/language-context"

export default function ProgramsSection() {
  const { t } = useLanguage()

  const programs = [
    {
      id: "1",
      titleKey: "programs.basic.title",
      descriptionKey: "programs.basic.description",
      image: "/IMG_3067.JPG",
      bgColor: "bg-secondary/10",
    },
    {
      id: "2",
      titleKey: "programs.steam.title",
      descriptionKey: "programs.steam.description",
      image: "/IMG_3068.JPG",
      bgColor: "bg-primary/10",
    },
    {
      id: "3",
      titleKey: "programs.english.title",
      descriptionKey: "programs.english.description",
      image: "/IMG_3069.JPG",
      bgColor: "bg-secondary/10",
    },
  ]

  return (
    <section className="py-16 bg-gray-50">
      <div className="container mx-auto px-4">
        <h2 className="text-3xl md:text-4xl font-bold text-primary text-center mb-4">{t("programs.title")}</h2>
        <p className="text-center text-gray-600 mb-12 max-w-3xl mx-auto">{t("programs.subtitle")}</p>

        <div className="grid md:grid-cols-3 gap-8">
          {programs.map((program) => (
            <div key={program.id} className={`rounded-lg overflow-hidden shadow-lg transition-all hover:shadow-xl ${program.bgColor}`}>
              <div className="relative h-48">
                <Image
                  src={program.image}
                  alt={t(program.titleKey)}
                  fill
                  className="object-cover"
                />
              </div>
              <div className="p-6">
                <h3 className="text-xl font-bold text-primary mb-3">{t(program.titleKey)}</h3>
                <p className="text-gray-600 mb-4">{t(program.descriptionKey)}</p>
                <Link 
                  href={`/programs/${program.id}`}
                  className="inline-block bg-secondary text-primary px-6 py-2 rounded-full font-medium hover:bg-secondary/90 transition-colors"
                >
                  {t("programs.viewDetails")} →
                </Link>
              </div>
            </div>
          ))}
        </div>

        <div className="text-center mt-12">
          <Link 
            href="/programs" 
            className="inline-block bg-primary text-white px-8 py-3 rounded-full font-semibold hover:bg-primary/90 transition-colors"
          >
            {t("programs.viewAll")}
          </Link>
        </div>
      </div>
    </section>
  )
}
