"use client"

import Image from "next/image"
import Link from "next/link"
import { useLanguage } from "@/contexts/language-context"

export default function ProgramsSection() {
  const { t } = useLanguage()

  const programs = [
    {
      id: 1,
      titleKey: "programs.basic.title",
      descriptionKey: "programs.basic.description",
      image: "/placeholder.svg?height=200&width=300",
    },
    {
      id: 2,
      titleKey: "programs.steam.title",
      descriptionKey: "programs.steam.description",
      image: "/placeholder.svg?height=200&width=300",
    },
    {
      id: 3,
      titleKey: "programs.english.title",
      descriptionKey: "programs.english.description",
      image: "/placeholder.svg?height=200&width=300",
    },
  ]

  return (
    <section className="py-16">
      <div className="container mx-auto px-4">
        <h2 className="section-title">{t("programs.title")}</h2>
        <p className="text-center text-gray-600 mb-12 max-w-3xl mx-auto">{t("programs.subtitle")}</p>

        <div className="grid md:grid-cols-3 gap-8">
          {programs.map((program) => (
            <div key={program.id} className="card">
              <div className="relative h-48">
                <Image
                  src={program.image || "/placeholder.svg"}
                  alt={t(program.titleKey)}
                  fill
                  className="object-cover"
                />
              </div>
              <div className="p-6 border-l-4 border-secondary">
                <h3 className="text-xl font-bold text-primary mb-2">{t(program.titleKey)}</h3>
                <p className="text-gray-600 mb-4">{t(program.descriptionKey)}</p>
                <Link href={`/programs/${program.id}`} className="text-primary-light font-medium hover:underline">
                  {t("programs.viewDetails")} →
                </Link>
              </div>
            </div>
          ))}
        </div>

        <div className="text-center mt-12">
          <Link href="/programs" className="btn-primary">
            {t("programs.viewAll")}
          </Link>
        </div>
      </div>
    </section>
  )
}
