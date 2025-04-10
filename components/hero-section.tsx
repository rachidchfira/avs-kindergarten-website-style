"use client"

import Image from "next/image"
import Link from "next/link"
import { useLanguage } from "@/contexts/language-context"

export default function HeroSection() {
  const { t } = useLanguage()

  return (
    <section className="relative overflow-hidden h-[80vh] min-h-[600px]">
      <div className="absolute inset-0 w-full h-full">
        <Image
          src="/mickey-classroom.jpeg"
          alt="Kindergarten classroom background"
          fill
          priority
          className="object-cover w-full h-full"
        />
        <div className="absolute inset-0 bg-primary/50"></div>
      </div>
      <div className="container mx-auto px-4 h-full flex items-center justify-center relative z-10">
        <div className="max-w-3xl text-center text-white">
          <h1 className="text-4xl md:text-5xl font-bold mb-4">{t("hero.title")}</h1>
          <p className="text-xl mb-8">{t("hero.description")}</p>
          <div className="flex flex-wrap gap-4 justify-center">
            <Link
              href="/programs"
              className="bg-secondary hover:bg-secondary/90 text-primary px-8 py-3 rounded-full font-semibold transition-colors"
            >
              {t("hero.cta.explore")}
            </Link>
            <Link
              href="/contact"
              className="bg-white text-primary px-8 py-3 rounded-full font-semibold hover:bg-white/90 transition-colors"
            >
              {t("hero.cta.contact")}
            </Link>
          </div>
        </div>
      </div>
    </section>
  )
}
