"use client"

import { Users, BookOpen, Palette } from "lucide-react"
import { useLanguage } from "@/contexts/language-context"

export default function FeaturesSection() {
  const { t } = useLanguage()

  return (
    <section className="py-16 bg-gray-50">
      <div className="container mx-auto px-4">
        <h2 className="section-title">{t("features.title")}</h2>

        <div className="grid md:grid-cols-3 gap-8">
          <div className="feature-card border-secondary">
            <div className="bg-secondary-light p-3 rounded-full mb-4">
              <Users className="w-8 h-8 text-primary" />
            </div>
            <h3 className="text-xl font-bold text-primary mb-2">{t("features.teachers.title")}</h3>
            <p className="text-gray-600">{t("features.teachers.description")}</p>
          </div>

          <div className="feature-card border-accent-blue">
            <div className="bg-accent-blue bg-opacity-20 p-3 rounded-full mb-4">
              <BookOpen className="w-8 h-8 text-accent-blue" />
            </div>
            <h3 className="text-xl font-bold text-primary mb-2">{t("features.programs.title")}</h3>
            <p className="text-gray-600">{t("features.programs.description")}</p>
          </div>

          <div className="feature-card border-accent-green">
            <div className="bg-accent-green bg-opacity-20 p-3 rounded-full mb-4">
              <Palette className="w-8 h-8 text-accent-green" />
            </div>
            <h3 className="text-xl font-bold text-primary mb-2">{t("features.methods.title")}</h3>
            <p className="text-gray-600">{t("features.methods.description")}</p>
          </div>
        </div>
      </div>
    </section>
  )
}
