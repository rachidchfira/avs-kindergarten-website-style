"use client"

import { useLanguage } from "@/contexts/language-context"
import Image from "next/image"

export default function AboutPage() {
  const { t } = useLanguage()

  return (
    <div>
      <div className="bg-primary text-white py-16">
        <div className="container mx-auto px-4 text-center">
          <h1 className="text-4xl font-bold mb-4">{t("about.title")}</h1>
          <p className="text-xl">{t("about.subtitle")}</p>
        </div>
      </div>

      <div className="py-16">
        <div className="container mx-auto px-4">
          <div className="grid md:grid-cols-2 gap-12 items-center mb-16">
            <div>
              <h2 className="text-3xl font-bold text-primary mb-6">{t("about.history.title")}</h2>
              <p className="text-gray-600 mb-4">{t("about.history.description")}</p>
            </div>
            <div className="rounded-lg overflow-hidden">
              <Image
                src="/placeholder.svg?height=400&width=600"
                alt="School History"
                width={600}
                height={400}
                className="w-full h-auto"
              />
            </div>
          </div>

          <div className="grid md:grid-cols-2 gap-12 items-center mb-16">
            <div className="order-2 md:order-1 rounded-lg overflow-hidden">
              <Image
                src="/placeholder.svg?height=400&width=600"
                alt="Our Mission"
                width={600}
                height={400}
                className="w-full h-auto"
              />
            </div>
            <div className="order-1 md:order-2">
              <h2 className="text-3xl font-bold text-primary mb-6">{t("about.mission.title")}</h2>
              <p className="text-gray-600 mb-4">{t("about.mission.description")}</p>
            </div>
          </div>

          <div className="bg-gray-50 p-8 rounded-lg mb-16">
            <h2 className="text-3xl font-bold text-primary mb-6 text-center">{t("about.values.title")}</h2>
            <div className="grid md:grid-cols-3 gap-8">
              <div className="bg-white p-6 rounded-lg shadow-sm">
                <div className="w-12 h-12 bg-secondary rounded-full flex items-center justify-center mb-4">
                  <span className="text-primary font-bold text-xl">C</span>
                </div>
                <h3 className="text-xl font-bold text-primary mb-2">{t("about.values.creativity").split(":")[0]}</h3>
                <p className="text-gray-600">{t("about.values.creativity").split(":")[1]}</p>
              </div>

              <div className="bg-white p-6 rounded-lg shadow-sm">
                <div className="w-12 h-12 bg-secondary rounded-full flex items-center justify-center mb-4">
                  <span className="text-primary font-bold text-xl">C</span>
                </div>
                <h3 className="text-xl font-bold text-primary mb-2">{t("about.values.confidence").split(":")[0]}</h3>
                <p className="text-gray-600">{t("about.values.confidence").split(":")[1]}</p>
              </div>

              <div className="bg-white p-6 rounded-lg shadow-sm">
                <div className="w-12 h-12 bg-secondary rounded-full flex items-center justify-center mb-4">
                  <span className="text-primary font-bold text-xl">C</span>
                </div>
                <h3 className="text-xl font-bold text-primary mb-2">{t("about.values.comprehensive").split(":")[0]}</h3>
                <p className="text-gray-600">{t("about.values.comprehensive").split(":")[1]}</p>
              </div>
            </div>
          </div>

          <div className="grid md:grid-cols-2 gap-12 items-center">
            <div>
              <h2 className="text-3xl font-bold text-primary mb-6">{t("about.facilities.title")}</h2>
              <p className="text-gray-600 mb-4">{t("about.facilities.description")}</p>
            </div>
            <div className="rounded-lg overflow-hidden">
              <Image
                src="/placeholder.svg?height=400&width=600"
                alt="Our Facilities"
                width={600}
                height={400}
                className="w-full h-auto"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
