"use client"

import HeroSection from "@/components/hero-section"
import FeaturesSection from "@/components/features-section"
import ProgramsSection from "@/components/programs-section"
import TeachersSection from "@/components/teachers-section"
import TestimonialsSection from "@/components/testimonials-section"
import FaqSection from "@/components/faq-section"
import ContactSection from "@/components/contact-section"
import { useLanguage } from "@/contexts/language-context"

export default function Home() {
  // We need to use the useLanguage hook to ensure the context is properly loaded
  const { t } = useLanguage()

  return (
    <>
      <HeroSection />
      <FeaturesSection />
      <ProgramsSection />
      <TeachersSection />
      <TestimonialsSection />
      <FaqSection />
      <ContactSection />
    </>
  )
}
